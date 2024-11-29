<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\TransactionController;

Route::get('/home', function () {
    return view('index');
})->name('home');


Route::get('/wallet/balance', [WalletController::class, 'balance']);
Route::get('/wallet/add', function () {
    return view('wallet.add_wallet');
})->name('add_fund');
Route::post('/wallet/fund', [WalletController::class, 'fund'])->name('fund');
Route::get('/airtime/buy', function () {
    return view('airtime.buy_airtime');
})->name('buy');

Route::post('/purchase/airtime', [PurchaseController::class, 'purchaseAirtime']);

Route::get('/transactions', [TransactionController::class, 'index']);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

