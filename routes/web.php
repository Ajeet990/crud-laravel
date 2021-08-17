<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
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

Route::get('list',[MyController::class,'getData']);
Route::get('delete/{id}',[MyController::class,'delete']);
Route::post('insert',[MyController::class,'insert']);
Route::view('insert','/insert');
Route::get('edit/{id}',[MyController::class,'showData']);
Route::post('edit',[MyController::class,'update']);




