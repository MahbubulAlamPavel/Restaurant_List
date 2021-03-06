<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainController;
use Illuminate\Contracts\Session\Session;

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


Route::group(['middleware'=>"web"],function(){
    Route::get('/', [mainController::class,'home']);
    Route::get('/list', [mainController::class,'list']);
    Route::get('/add', [mainController::class,'add']);
    Route::post('/new', [mainController::class,'new']);
    Route::get('/search', [mainController::class,'search']);
    Route::post('/store', [mainController::class,'store']);
    Route::get('/register', [mainController::class,'register']);
    Route::get('/login', [mainController::class,'login']);
    Route::post('/logs', [mainController::class,'logs']);
    Route::get('/edit/{id}', [mainController::class,'edit']);
    Route::post('/update', [mainController::class,'update']);
    Route::post('/delete', [mainController::class,'delete']);
    Route::get('/logout', [mainController::class,'logout']);
});
