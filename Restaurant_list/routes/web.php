<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainController;

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

Route::get('/', [mainController::class,'home']);
Route::get('/list', [mainController::class,'list']);
Route::get('/add', [mainController::class,'add']);
Route::post('/new', [mainController::class,'new']);
Route::get('/search', [mainController::class,'search']);
Route::post('/store', [mainController::class,'store']);
Route::get('/register', [mainController::class,'register']);
Route::get('/login', [mainController::class,'login']);
Route::post('/logs', [mainController::class,'logs']);

