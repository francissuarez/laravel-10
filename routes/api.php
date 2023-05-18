<?php

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::resource('food', FoodController::class);

Route::post('/burger',[\App\Http\Controllers\BurgerController::class,'burger'])->name('burger.burgerclear');
Route::get('/burger/view',[\App\Http\Controllers\BurgerController::class,'index']);



//Route::controller(StudentController::class)->group(function (){
//    Route::get('/student','index')->name('student.search');
//    Route::get('/create','create');
//    Route::post('create','store');
//    Route::get('/show/{id}','show');
//    Route::get('edit/{id}','edit');
//    Route::post('edit/{id}','update')->name('edit.update');
//    Route::get('delete/{id}','destroy');
//
//});

//Route::get('good',function (){
//
//    return Post::all();
//})
