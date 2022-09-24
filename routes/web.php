<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\Authentication;
use App\Http\Controllers\Customer;
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

// Main
Route::get('/', [Authentication::class, 'index']);
Route::get('/Home', [Authentication::class, 'index']);

// Register
Route::get('/Register', [Authentication::class, 'registerPage'])->middleware('guest');
Route::post('/Register', [Authentication::class, 'store']);

// User
Route::get('/Login', [Authentication::class, 'loginPage'])->middleware('guest');
Route::post('/Login', [Authentication::class, 'authenticate'])->name('login-user');
Route::get('/OrderSaya', [Customer::class, 'orderSaya'])->middleware('auth');
Route::get('/Ulasan', [Customer::class, 'ulasan'])->middleware('auth');
Route::post('/Ulasan', [Customer::class, 'store_ulasan'])->middleware('auth');
Route::post('/Logout', [Authentication::class, 'logout']);

// Admin
Route::get('/HomeAdmin', [Admin::class, 'indexAdmin'])->middleware('is_admin');
Route::get('/Product', [Admin::class, 'product'])->middleware('is_admin');
Route::post('/Product', [Admin::class, 'deleteProduct'])->middleware('is_admin');
Route::get('/addProduct', [Admin::class, 'addproduct'])->middleware('is_admin');
Route::get('/editProduct', [Admin::class, 'editProduct'])->middleware('is_admin');
Route::post('/editProduct', [Admin::class, 'storeeditProduct'])->middleware('is_admin');
Route::post('/addProduct', [Admin::class, 'storeProduct'])->middleware('is_admin');
Route::get('/OrderDetail', [Admin::class, 'orderDetail'])->middleware('is_admin');
Route::post('/UpdateOrder/{id}', [Admin::class, 'updateOrder'])->name('updateOrder')->middleware('is_admin');
Route::get('/DataSelesai', [Admin::class, 'selesai'])->middleware('is_admin');
Route::get('/FinishDetail', [Admin::class, 'finishDetail'])->middleware('is_admin');
Route::get('/ProfileAdmin', [Admin::class, 'profileAdmin'])->middleware('is_admin');

// Service User
Route::get('/Service', [Customer::class, 'service']);
Route::get('/Order', [Customer::class, 'order'])->middleware('auth');
Route::post('/Order', [Customer::class, 'store'])->middleware('auth')->name('checkouts');
Route::get('/Invoice', [Customer::class, 'invoice'])->middleware('auth');
Route::get('/Profile', [Customer::class, 'profile'])->middleware('auth');