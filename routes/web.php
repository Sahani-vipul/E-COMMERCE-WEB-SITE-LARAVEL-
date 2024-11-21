<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\UserProductCOntoller;

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
//     return view('welcome');
// });



Route::get('/register', function () {
    return view('registration');
})->name('registration');

Route::get('/dashboard',[UserController::class,'dashboard'])->name('dashboard');

Route::get('/verification', function () {
    return view('verification');
});

Route::get('/homepage', function () {
    return view('homepage');
})->name('');

Route::get('/login', function () {
    return view('login');
})->name('loginPage');

Route::get('/customer',[UserController::class,'Cust_list'])->name('cust.list');
Route::post('/register',[UserController::class,'store'])->name('registerPost');
Route::post('/login',[UserController::class,'authentication'])->name('loginPost');
Route::get('/verification/{id}',[UserController::class,'verification'])->name('verification');
Route::post('/verified',[UserController::class,'verifiedOtp'])->name('verifiedOtp');
Route::get('/resend-otp',[UserController::class,'resendOtp'])->name('resendOtp');

Route::get('/categories',[CategoryController::class,'index'])->name('categories.index');
// Route::get('/categories',[CategoryController::class,'index_deleted'])->name('categories.index.deleted');
Route::get('/categories/add',[CategoryController::class,'add'])->name('categories.add');
Route::post('/categories/insert',[CategoryController::class,'insert'])->name('categories.insert');
Route::get('categories/edit/{id}',[CategoryController::class,'edit'])->name('categories.edit');
Route::post('categories/update',[CategoryController::class,'update'])->name('categories.update');
Route::get('categories/{id}',[CategoryController::class,'delete'])->name('categories.delete');

Route::get('/product',[ProductController::class,'index'])->name('product.index');
Route::get('/product/add',[ProductController::class,'add'])->name('product.add');
Route::post('/product/insert',[ProductController::class,'insert'])->name('product.insert');
Route::get('product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::post('product/update',[ProductController::class,'update'])->name('product.update');

Route::get('/product/bulkupload',function(){
    return view('product.bulkupload');
})->name('bulkuplaod');

Route::post('/product/bulkuplad',[ProductController::class,'bulkupload'])->name('product.bulk');
Route::get('product/{id}',[ProductController::class,'delete'])->name('product.delete');

Route::get('/',function(){

    return view('Customer.index');
})->name('customer.index');

Route::get('/',[UserProductCOntoller::class,'index'])->name('customer.index');

Route::get('/customer/product/details/{id}',[UserProductCOntoller::class,'productdetails'])->name('customer.product.details');

Route::get('/customer/product',[UserProductCOntoller::class,'product'])->name('customer.product');

Route::group(['middleware' => 'auth'], function () {
Route::post('/customer/add-to-cart',[CartController::class,'add'])->name('add-to-cart');
Route::get('/customer/add-to-cart',[CartController::class,'view'])->name('cart');

Route::get('/cart/delete/{id}',[CartController::class,'delete'])->name('cartitem.delete');

Route::get('/customer/checkout',[checkoutController::class,'checkout'])->name('checkout');

Route::post('/addressupload',[UserController::class,'address'])->name('add-address');
Route::get('/address',[UserController::class,'addressview'])->name('address');
});
// Roue::post(view);
// Route::get('/list-product', [ProductController::class, 'listproduct']);
// Route::get('/status/update', [ProductController::class, 'updateStatus'])->name('update.status');


Route::get('/logout',[UserController::class,'logout'])->name('logout');

Route::post('/placeorder',[checkoutController::class,'placeorder'])->name('order');

Route::get('/customer/order',[OrderController::class,'index'])->name('viewOrder')->middleware('auth');;
Route::get('/orderDetails/{id}',[OrderController::class,'view'])->name('orderDetails');

Route::get('/order',[OrderController::class,'adminOrderList'])->name('orderlist');
Route::get('/order/History',[OrderController::class,'adminOrderHistory'])->name('adminOrderHistory');
Route::get('/order_Details/{id}',[OrderController::class,'adminOrderDetail'])->name('adminOrderDetails');
Route::post('/update_status',[OrderController::class,'updatestatus'])->name('updatestatus');

Route::get('/invoice/{id}',[OrderController::class,'invoice'])->name('invoice');

Route::get('/bills',[OrderController::class,'viewBill'])->name('billList');

Route::group(['middleware' => 'auth'], function () {


});

Route::get('/Productdetails/{id}',[ProductController::class,'productdetails'])->name('prodcutdetails');
