<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ExpensesController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\SubgroupController;

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

Route::get('/expenses-details', function(){
    return view('expenses');
});

Route::get('/group-add', function(){
    return view('addgroup');
});

Route::resource('/products', \App\Http\Controllers\ProductController::class);

Route::get('/add-product','App\Http\Controllers\ProductController@showProduct');

Route::resource('/save-expenses', \App\Http\Controllers\ExpensesController::class);

Route::resource('/others-details', \App\Http\Controllers\OtherController::class);

Route::get('/expenses-details','App\Http\Controllers\OtherController@showuser');

Route::resource('/add-group', \App\Http\Controllers\GroupController::class);

Route::get('/group-add', 'App\Http\Controllers\GroupController@showGroup');

Route::resource('/add-sub-group', \App\Http\Controllers\SubgroupController::class);
