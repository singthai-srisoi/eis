<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tb_productController;
use App\Http\Controllers\tb_orderController;
use App\Http\Controllers\tb_cartController;
use App\Http\Controllers\tb_userController;
use App\Http\Controllers\tb_addressController;

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
//signup account
Route::view('signup', 'customer/signup');
Route::post('signup', [tb_userController::class, 'signupSave']);

//Customer signin page
Route::view('signin', 'customer/signin');
Route::post('signin', [tb_userController::class, 'signinCred']);

//Customer signout page
Route::get('signout', [tb_userController::class, 'signout']);

//Customer forgot password page
Route::view('resetpassword', 'customer/resetpassword');

//Customer profile page
Route::view('profile', 'customer/profile');
Route::get('profile', [tb_userController::class, 'profile']);

//Customer edit profile page
Route::view('editprofile', 'customer/editprofile');
Route::get('editprofile/{id}', [tb_userController::class, 'editprofile']);
Route::put('editprofile/{id}', [tb_userController::class, 'updateprofile']);

//Customer product page
Route::get('/', [tb_productController::class, 'index']);
Route::get('product-cust/', [tb_productController::class, 'index']);
Route::get('product-details/{id}', [tb_productController::class, 'productView']);

//Customer product category page
Route::get('product-category/{ctg_desc}', [tb_productController::class, 'viewcategory']);
 
//Customer order process
Route::get('order-cust/', [tb_productController::class, 'cart']);
Route::get('add-to-cart/{id}', [tb_productController::class, 'addToCart'])->name('add-to-cart');
Route::patch('update-cart', [tb_productController::class, 'updateCart'])->name('update-cart');
Route::delete('remove-from-cart', [tb_productController::class, 'removeCart'])->name('remove-from-cart');

//Customer order summary
Route::post('place-order', [tb_orderController::class, 'placeorder']);
Route::get('order-history-cust/{id}', [tb_orderController::class, 'index']);
Route::get('order-details-cust/{id}', [tb_orderController::class, 'vieworder']);
Route::get('invoice-cust/{id}', [tb_orderController::class, 'showInvoice']);

//Customer address
Route::get('address/{id}', [tb_addressController::class, 'address']);
Route::get('address', [tb_addressController::class, 'index']);
Route::get('success', [tb_orderController::class, 'success']);
Route::get('/receipt-cust/{id}', [tb_orderController::class, 'receiptcust']);
Route::get('success', [tb_orderController::class, 'success']);
