<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\TransactionController;

Auth::routes();

// Home Route
// Route::get('/', function () {
//     return view('index');
// })->name('home');

// Wallet Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/', [WalletController::class, 'index'])->name('home');
    Route::get('/wallet/balance', [WalletController::class, 'balance'])->name('wallet.balance');
    Route::get('/wallet/add', function () {
        return view('wallet.add_wallet');
    })->name('wallet.add_fund');
    Route::post('/wallet/fund', [WalletController::class, 'fund'])->name('wallet.fund');

    // Airtime Purchase Routes
    Route::get('/airtime/buy', function () {
        return view('airtime.buy_airtime');
    })->name('airtime.buy');
    Route::post('/purchase/airtime', [PurchaseController::class, 'purchaseAirtime'])->name('airtime.purchase');

    // Transaction Routes
    Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');
});

// Remove unused HomeController route if not needed
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
