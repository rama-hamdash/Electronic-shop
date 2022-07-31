<?php

use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\user\CartController;
use App\Http\Controllers\user\InterfaceController;
use App\Http\Controllers\user\LoginController;
use App\Http\Controllers\user\SignupController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| user Routes
|--------------------------------------------------------------------------
|
| Here is where you can register user routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::get('/test', function(){
 //   return 'hhhhhhhhhhhhh  user';
//    });

Route::get('/',[InterfaceController::class,'index'])->name('home');
Route::get('home',[InterfaceController::class,'index'])->name('users.interface');
Route::get('shop',[InterfaceController::class,'shop'])->name('shop.interface');
Route::get('product/{product}',[InterfaceController::class,'product'])->name('product.interface');
Route::get('contact us',[InterfaceController::class,'contact'])->name('contact');
Route::get('about us',[InterfaceController::class,'aboute'])->name('aboute');
Route::get('single_product',[InterfaceController::class,'single_product'])->name('single_product');

//  cart routes
Route::middleware(['auth'])->group(function () {
    Route::get('cart/get_content',[CartController::class,'list_cart'])->name('user.cart.get_content');
    Route::get('cart/add_item',[CartController::class,'add_to_cart'])->name('user.cart.add_to_cart');
    Route::get('cart/update_item',[CartController::class,'updateCart'])->name('user.cart.update_cart');
    Route::get('cart/delete_item/{item_id}',[CartController::class,'removecart'])->name('user.cart.delete_item');
    Route::get('cart/clear_cart',[CartController::class,'clearAllCart'])->name('user.cart.clear_cart');
});


// my orders route
Route::get('myorders',[InterfaceController::class,'myorders'])->name('myorders');


Route::get('test', function () {
        
    return view('user.shop.basket');
});

