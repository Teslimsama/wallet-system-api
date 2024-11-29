<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PurchaseController extends Controller
{
    public function purchaseAirtime(Request $request)
    {
        $request->validate(['amount' => 'required|numeric|min:1']);

        DB::transaction(function () use ($request) {
            $user = Auth::user();
            $wallet = $user->wallet;
            if ($wallet->balance < $request->amount) {
                abort(400, 'Insufficient balance');
            }
            $wallet->balance -= $request->amount;
            $wallet->save();

            Transaction::create([
                'user_id' => $user->id(),
                'type' => 'purchase',
                'amount' => $request->amount,
                'description' => 'Airtime purchase',
            ]);
        });
        return response()->json(['message' => 'Airtime purchased successfully']);
    }

}
