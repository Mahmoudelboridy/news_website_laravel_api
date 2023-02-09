<?php

use App\Http\Controllers\newcontroller;
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
Route::post('/create', [newcontroller::class, 'createn'])->name('create');
Route::get('/all', [newcontroller::class, 'wget']);
Route::get('/tech', [newcontroller::class, 'wgett']);
Route::get('/sport', [newcontroller::class, 'wgets']);
Route::get('/politics', [newcontroller::class, 'wgetp']);