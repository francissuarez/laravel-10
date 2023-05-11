<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customerController;


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

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/index', function () {
//    return view('index');
//});

//Route::controller( customerController::class)->group(function () {
////    Route::get('app', 'user')->name('app.search');
//    Route::get('/index','customers')->name('index.customer');
//});

Route::controller(customerController::class)->group(function () {
    Route::get('/index', 'Customers');
//    Route::post('/orders', 'store');
});

//Route::controller(customerController::class)->group(function (){
//
//
//    Route::get('index', 'Customers')->name('index.customers');
//
//
//});
