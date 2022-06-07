<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::get('/user/create' ,[UserController::class,'create']);
Route::post('/user',[UserController::class,'store'])->name("user.create");
Route::get('/user/show',[UserController::class,'show']);
Route::get('/user/{id}/edit',[UserController::class,'edit']);
Route::post('/user/{id}',[UserController::class,'update']);

