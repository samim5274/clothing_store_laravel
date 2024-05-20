<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ExpensesController;

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

Route::get('/add-product', function(){
    return view('addProduct');
});

Route::get('/expenses-detail', function(){
    return view('expenses');
});

Route::resource('/products', \App\Http\Controllers\ProductController::class);

Route::resource('/save-expenses', \App\Http\Controllers\ExpensesController::class);

Route::get('/add-product','App\Http\Controllers\ProductController@showProduct');


