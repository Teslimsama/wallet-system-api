<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PurchaseController extends Controller
{
    public function purchaseAirtime(Request $request)
    {
        try {
            // Start a database transaction
            DB::transaction(function () use ($request) {
                // Lock the wallet row to prevent other transactions from modifying it
                $wallet = Wallet::where('user_id', auth()->id())->lockForUpdate()->first();

                if (!$wallet) {
                    throw new \Exception('Wallet not found.');
                }

                // Check if the wallet has enough balance
                if ($wallet->balance < $request->amount) {
                    throw new \Exception('Insufficient balance.');

                    return view('airtime.buy_airtime');
                }
                
                // Deduct the amount from the wallet balance
                $wallet->balance -= $request->amount;
                $wallet->save();
                
                // Log the transaction
                Transaction::create([
                    'user_id' => auth()->id(),
                    'type' => 'airtime',
                    'amount' => $request->amount,
                    'description' => 'Airtime purchase',
                ]);
            });

            // Return success response
            // return response()->json(['message' => 'Airtime purchased successfully.']);
            Toastr::success('Airtime purchased successfully :)', 'Success');
            return view('index');
        } catch (\Exception $e) {
            // Return error response if something goes wrong
            // return response()->json(['error' => $e->getMessage()], 400);
            Toastr::error('Buying Airtime failed: ' . $e->getMessage(), 'Error');
            return view('airtime.buy_airtime');
        }
    }
}
