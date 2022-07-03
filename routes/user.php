<?php

use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\user\InterfaceController;
use Darryldecode\Cart\CartCollection;
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

Route::get('interface',[InterfaceController::class,'index'])->name('users.interface');
Route::get('productinterface',[InterfaceController::class,'product'])->name('product.interface');
Route::get('contact',[InterfaceController::class,'contact'])->name('contact');
Route::get('aboute',[InterfaceController::class,'aboute'])->name('aboute');


//  cart routes
Route::get('cart/get_content',[CartCollection::class,'list_cart'])->name('admin.cart.get_content');
Route::get('cart/add_item',[CartController::class,'add_to_cart'])->name('admin.cart.add_to_cart');
Route::get('cart/update_item',[CartController::class,'updateCart'])->name('admin.cart.update_cart');
Route::get('cart/delete_item/{item_id}',[CartController::class,'removecart'])->name('admin.cart.delete_item');
Route::get('cart/clear_cart',[CartController::class,'clearAllCart'])->name('admin.cart.clear_cart');

Route::get('test', function () {
        
    return view('user.shop.basket');
});