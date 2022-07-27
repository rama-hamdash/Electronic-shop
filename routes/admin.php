<?php

use App\Http\Controllers\admin\CartController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ModelController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\ProfileController;
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

Route::prefix('admin')->group(function () {
  // dashboard route
  Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
});

//users routes
Route::resource('users', UserController::class)->names([
  'index' => 'admin.users.index',
  'create' => 'admin.users.create',
  'store' => 'admin.users.store',
  'show' => 'admin.users.show',
  'edit' => 'admin.users.edit',
  'update' => 'admin.users.update',
  'destroy' => 'admin.users.destroy'
]);


//product routes
Route::resource('products', ProductController::class)->names([
  'index' => 'admin.products.index',
  'create' => 'admin.products.create',
  'store' => 'admin.products.store',
  'show' => 'admin.products.show',
  'edit' => 'admin.products.edit',
  'update' => 'admin.products.update',
  'destroy' => 'admin.products.destroy'
]);
Route::get('product_category/{category_id}', [ProductRequest::class, 'product_category']);

//categories routes
Route::resource('categories', CategoryController::class)->names([
  'index' => 'admin.categories.index',
  'create' => 'admin.categories.create',
  'store' => 'admin.categories.store',
  'show' => 'admin.categories.show',
  'edit' => 'admin.categories.edit',
  'update' => 'admin.categories.update',
  'destroy' => 'admin.categories.destroy'

]);

//model routes
Route::resource('models', ModelController::class)->names([
  'index' => 'admin.models.index',
  'create' => 'admin.models.create',
  'store' => 'admin.models.store',
  'show' => 'admin.models.show',
  'edit' => 'admin.models.edit',
  'update' => 'admin.models.update',
  'destroy' => 'admin.models.destroy'

]);

//orders routes
Route::get('orders/edit_status/{order_id}', [OrderController::class, 'edit_status'])->name('admin.orders.edit_status');
//Route::get('orders/assign_delivery_boy/{order_id}', [DeliveryController::class, 'assign_delivery_boy_form'])->name('admin.orders.assign_delivery_boy_form');
//Route::put('orders/assign_delivery_boy', [DeliveryController::class, 'assign_delivery_boy'])->name('admin.orders.assign_delivery_boy');
Route::put('orders/update_status', [OrderController::class, 'update_status'])->name('admin.orders.update_status');
Route::get('orders/add_order_items_to_basket', [OrderController::class, 'add_order_items_to_basket'])->name('admin.orders.add_order_items_to_basket');
Route::resource('orders', OrderController::class)->names([
  'index' => 'admin.orders.index',
  'create' => 'admin.orders.create',
  'store' => 'admin.orders.store',
  'show' => 'admin.orders.show',
  'edit' => 'admin.orders.edit',
  'update' => 'admin.orders.update',
  'destroy' => 'admin.orders.destroy'
]);

//profile route
Route::get('profile',[ProfileController::class,'index'])->name('profile.admin');
