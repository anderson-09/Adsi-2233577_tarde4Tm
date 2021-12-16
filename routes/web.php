<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ConsultasController;



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

Route::resource('/clients','App\Http\Controllers\ClientController');

Route::resource('/products','App\Http\Controllers\ProductController');

Route::resource('/sales','App\Http\Controllers\SaleController');

Route::get('/consultas',[ConsultasController::class,'Consultas'])->name('Consultas'); 




