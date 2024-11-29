<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $transactions = $user->transactions;
        return view('transaction', compact('transactions'));
    }
    public function getTransactions()
    {
        $user = Auth::user();
        $transactions = $user->transactions;
        return response()->json($transactions);
    }

}
