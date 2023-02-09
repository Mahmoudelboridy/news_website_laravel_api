<?php

use App\Http\Controllers\mnrController;
use Illuminate\Support\Facades\Route;

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

Route::get('store',[mnrController::class,'vie']);
Route::post('/store',[mnrController::class,'store'])->name('store');
Route::get('/ard',[mnrController::class,'ard']);
Route::get('nnew/{id}',[mnrController::class,'nnew']);