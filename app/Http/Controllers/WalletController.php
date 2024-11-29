<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
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
        DB::transaction(function () use ($request) {
            $user = Auth::user();
            $wallet = $user->wallet;
            $wallet->balance += $request->amount;
            $wallet->save();
            
            Transaction::create([
                'user_id' => $user()->id,
                'type' => 'funding',
                'amount' => $request->amount,
                'description' => 'Wallet funding',
            ]);
        });
        return response()->json(['message' => 'Wallet funded successfully']);
    }

}
