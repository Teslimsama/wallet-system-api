<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Wallet;
use Brian2694\Toastr\Facades\Toastr;
use Brian2694\Toastr\Toastr as ToastrToastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WalletController extends Controller
{
    public function balance()
    {
        $user = Auth::user();
        $wallet = $user->wallet;
        return response()->json(['balance' => $wallet->balance]);
    }
    public function add_funds(Request $request){

    }
    public function fund(Request $request)
    {
        $request->validate(['amount' => 'required|numeric|min:1']);

        try {
            // Start a database transaction
            DB::transaction(function () use ($request) {
                // Lock the wallet row to prevent other transactions from modifying it
                $wallet = Wallet::where('user_id', auth()->id())->lockForUpdate()->first();
                
                if (!$wallet) {
                    throw new \Exception('Wallet not found.');
                }
                
                // Update the wallet balance
                $wallet->balance += $request->amount;
                $wallet->save();
                
                // dd(auth()->id());
                // Log the transaction
                Transaction::create([
                    'user_id' => auth()->id(),
                    'type' => 'funding',
                    'amount' => $request->amount,
                    'description' => 'Wallet funding',
                ]);
            });

            // Return success response
            // return response()->json(['message' => 'Wallet funded successfully.']);
            Toastr::success('Wallet funded successfully :)', 'Success');
            return view('index');
        } catch (\Exception $e) {
            // Return error response if something goes wrong
            // return response()->json(['error' => $e->getMessage()], 400);
            Toastr::error('Wallet funding failed: ' . $e->getMessage(), 'Error');
            return view('wallet.add_wallet');
        }
    }

}
