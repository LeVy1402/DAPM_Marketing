<?php

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
    return view('staff.dashboard');
});

Route::view('product', 'admin.product.product')->name('product');

Route::view('/register', 'content.register')->name('register');
//product
Route::view('/product_category', 'admin.product.product_category')->name('product_category');
Route::view('/product_label', 'admin.product.product_label')->name('product_label');
//customer
Route::view('/customer_field', 'admin.customer.customer_field')->name('customer_field');
Route::view('/customer_source', 'admin.customer.customer_source')->name('customer_source');
Route::view('/customer_label', 'admin.customer.customer_label')->name('customer_label');
//demand
Route::view('/demand_label', 'admin.demand.demand_label')->name('demand_label');
