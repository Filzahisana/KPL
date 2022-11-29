<?php

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

Route::post('/tambah-hewan', '\App\Http\Controllers\HewanController@create');
Route::get('/tampilkan-hewan', '\App\Http\Controllers\HewanController@read');
Route::get('/update-hewan', '\App\Http\Controllers\HewanController@update');
