<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('auth.login');
// });
Route::get('/', [\App\Http\Controllers\Auth\LoginController::class, 'home']);

Route::get('dashBoard',[\App\Http\Controllers\DashboardController::class, 'show'])->name('dashBoard');
Route::get('viewProfile',[\App\Http\Controllers\DashboardController::class, 'viewProfile'])->name('viewProfile');
Route::get('bookParcel',[\App\Http\Controllers\DashboardController::class, 'bookParcel'])->name('bookParcel');
Route::get('Withdraw',[\App\Http\Controllers\DashboardController::class, 'Withdraw'])->name('Withdraw');
Route::post('WithdrawStore',[\App\Http\Controllers\DashboardController::class, 'WithdrawStore'])->name('WithdrawStore');
Route::get('WithdrawList',[\App\Http\Controllers\DashboardController::class, 'WithdrawList'])->name('WithdrawList');



Auth::routes([
    'register' => true
]);

Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
