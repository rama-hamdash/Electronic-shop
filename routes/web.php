<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\user\LoginController;
use App\Http\Controllers\user\SignupController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
//Auth
Route::middleware(['guest'])->group(function () {
    Route::get('signup', [SignupController::class, 'index'])->name('signup');
    Route::post('signup', [SignupController::class, 'store'])->name('signup.store');
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('authenticate');
});
Route::get('logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');
