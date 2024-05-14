<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\subcategoryController;

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

Route::get('/add-sub-category', function(){
    return view('subCategory');
});

Route::resource('/subcategorys', subcategoryController::class);

Route::resource('/products', ProductController::class);

Route::get('/add-product','App\Http\Controllers\ProductController@showProduct');


