<?php

use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\WalletController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/wallet/balance', [WalletController::class, 'getBalance']);
    Route::post('/wallet/fund', [WalletController::class, 'fundWallet']);
    Route::post('/purchase/airtime', [PurchaseController::class, 'purchaseAirtime']);
    Route::get('/transactions', [TransactionController::class, 'getTransactions']);
});
