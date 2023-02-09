<?php

use App\Http\Controllers\newcontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', [newcontroller::class, 'get']);
Route::get('/Tech', [newcontroller::class, 'gett']);
Route::get('/sport', [newcontroller::class, 'gets']);
Route::get('/politics', [newcontroller::class, 'getp']);
Route::post('/create', [newcontroller::class, 'create'])->name('cretae');