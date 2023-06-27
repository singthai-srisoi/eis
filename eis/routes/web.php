<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\tb_purchaseorderController;
use App\Http\Controllers\tb_purchaserequestsController;
use App\Http\Controllers\tb_productController;
use App\Http\Controllers\tb_productscategoryController;
use App\Http\Controllers\tb_supplierController;
use App\Http\Controllers\tb_grnController;
use App\Http\Controllers\tb_orderController;
use App\Http\Controllers\tb_packstatusController;
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

// Route::get('/', function () {
//    return view('dasboard');
// });

Route::resource('/contact', SalesController::class);
Route::get('/', function() {
    return view('dashboard');
});


Route::get('/report', [SalesController::class, 'index'])->name('report');

Route::get('/dateBetween', [SalesController::class, 'dateBetween'])->name('dateBetween');

Route::get('/distinctProducts', [ProductController::class, 'getDistinctProducts'])->name('distinctProducts');

Route::get('/purchaser', function () {
    return view('purchaser');
});

Route::get('add-product2/', function () {
    return view('add-product2');
});

//list product
Route::view('list-product/', 'list-product');
Route::get('list-product/', [tb_productController::class,'Show']);

//add product
Route::get('add-product/', function () {
    return view('add-product');
});
Route::view('add', 'add-product');
Route::POST('add', [tb_productController::class, 'AddProduct']); //post to add action

//delete product
Route::get('deletes/{prod_id}', [tb_productController::class, 'deletes'])->name('deletes');

//edit product
Route::get('edit-product/', function () {
    return view('edit-product');
});
Route::view('edit-product/', 'edit-product');
Route::get('update/{prod_id}', [tb_productController::class, 'showData']); //showdata from existing data
Route::put('update/{prod_id}', [tb_productController::class, 'update']); //update data

Route::get('edit-product/', function () {
    return view('edit-product');
});

//Manage Purchase Order
Route::resource('/purchase_order', tb_purchaseorderController::class, ['names' => 'purchase_order']);

//Purchaser - PR
Route::get('purchaser_pr/{sid?}', [tb_purchaserequestsController::class, 'pr_index'])->name('purchaserequest/purchaser_pr');
Route::get('purchaser_invoice/', [tb_purchaserequestsController::class, 'pr_view'])->name('purchaserequest/purchaser_invoice');
Route::get('purchaser_invoice/{pr_id}', [tb_purchaserequestsController::class, 'pr_view'])->name('purchaserequest/purchaser_invoice');
Route::post('/pr/getPR',[tb_purchaserequestsController::class, 'getPR'])->name('PurchaseRequest.getPR');
Route::put('/pr/updateStatus/{pr_id}', [tb_purchaserequestsController::class, 'updateStatus'])->name('pr.updateStatus');

//Store - PR
// all routes purchase request
Route::get('pr/', [tb_purchaserequestsController::class, 'index'])->name('purchaserequest/pr');
Route::get('/dashboard', [tb_purchaserequestsController::class, 'getPurchaseRequestStatusCount']);
Route::get('purchaseReq-form/', [tb_purchaserequestsController::class, 'create']);
Route::post('purchase-request', [tb_purchaserequestsController::class, 'store']);
Route::get('purchaseReq-invoice/', [tb_purchaserequestsController::class, 'view'])->name('purchaserequest/purchaseReq-invoice');
Route::get('purchaseReq-invoice/{pr_id}', [tb_purchaserequestsController::class, 'view'])->name('purchaserequest/purchaseReq-invoice');
Route::get('pr-edit/{pr_id}', [tb_purchaserequestsController::class, 'edit'])->name('purchaserequest/pr-edit');
Route::put('/purchaserequest/update/{pr_id}', [tb_purchaserequestsController::class, 'update'])->name('purchaserequest.update');
Route::get('/purchaserequest/delete/{pr_id}', [tb_purchaserequestsController::class, 'delete'])->name('purchaserequest.delete');

//Manage Supplier
Route::resource('/supplier', tb_supplierController::class, ['names' => 'supplier']);
//Manage Product
Route::resource('/product', tb_productController::class, ['names' => 'product']);
//Manage Product Category
Route::resource('/product_category', tb_productscategoryController::class);

//grn
Route::get('/', function () {
    return view('dashboard');
});
Route::get('/edit-grn', function () {
    return view('edit-grn');
});
Route::get('/grn-invoice', function () {
    return view('grn-invoice');
});
Route::get('/purchaseReq-invoice', function () {
    return view('purchaseReq-invoice');
});
Route::view('/list-product', 'list-product');
Route::get('/list-product', [tb_productController::class,'Show']);
Route::get('grn', [tb_grnController::class,'index']);
Route::get('grn-invoice/{id}', [tb_grnController::class,'grninvoice']);
Route::post('grn', [tb_grnController::class, 'grnSave']);
Route::get('delete/{grn_id}', [tb_grnController::class, 'delete'])->name('delete');
Route::get('edit-grn/{grn_id}', [tb_grnController::class, 'showData'])->name('edit');
Route::put('grn/{id}/edit', [tb_grnController::class, 'edit'])->name('grn.edit');


//Routes for order status
Route::get('order-dashboard', [tb_orderController::class, 'show'])->name('order-dashboard');
Route::put('order/{id}', [tb_orderController::class, 'update'])->name('update-order');
Route::post('order-dashboard/add-status', [tb_orderController::class, 'addStatus'])->name('add-status');
Route::put('order-dashboard/update-status', [tb_orderController::class, 'updateStatus'])->name('update-status');
Route::delete('order-dashboard/delete-status', [tb_orderController::class, 'deleteStatus'])->name('delete-status');
Route::get('order-status/', function () {
    return view('order-status');
});
