<?php

use App\Http\Controllers\admin\CartController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ModelController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\UserController;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('admin')->group(function() {
// dashboard route
Route::get('dashboard',[DashboardController::class,'index'])->name('admin.dashboard');
});

  //users routes
  Route::resource('users', UserController::class)->names([
    'index' => 'admin.users.index',
    'create' => 'admin.users.create',
    'store' => 'admin.users.store',
    'show' => 'admin.users.show',
    'edit' => 'admin.users.edit',
    'update' => 'admin.users.update',
    'destroy' =>'admin.users.destroy'
  ]) ;


   //product routes
Route::resource('products', ProductController::class)->names([
    'index' =>'admin.products.index',
    'create' =>'admin.products.create',
    'store' => 'admin.products.store',
    'show' => 'admin.products.show',
    'edit' => 'admin.products.edit',
    'update' => 'admin.products.update',
    'destroy' =>'admin.products.destroy'
  
  ]);
  Route::get('product_category/{category_id}',[ProductRequest::class,'product_category']);

   //categories routes
Route::resource('categories', CategoryController::class)->names([
    'index' =>'admin.categories.index',
    'create' =>'admin.categories.create',
    'store' => 'admin.categories.store',
    'show' => 'admin.categories.show',
    'edit' => 'admin.categories.edit',
    'update' => 'admin.categories.update',
    'destroy' =>'admin.categories.destroy'
  
  ]);

   //model routes
Route::resource('models', ModelController::class)->names([
  'index' =>'admin.models.index',
  'create' =>'admin.models.create',
  'store' => 'admin.models.store',
  'show' => 'admin.models.show',
  'edit' => 'admin.models.edit',
  'update' => 'admin.models.update',
  'destroy' =>'admin.models.destroy'

]);


    //  cart routes
    Route::get('cart/get_content',[CartController::class,'list_cart'])->name('admin.cart.get_content');
    Route::get('cart/add_item',[CartController::class,'add_to_cart'])->name('admin.cart.add_to_cart');
    Route::get('cart/update_item',[CartController::class,'updateCart'])->name('admin.cart.update_cart');
    Route::get('cart/delete_item/{item_id}',[CartController::class,'removecart'])->name('admin.cart.delete_item');
    Route::get('cart/clear_cart',[CartController::class,'clearAllCart'])->name('admin.cart.clear_cart');
