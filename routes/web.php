<?php

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

Route::get('tgdd', 'App\Http\Controllers\ShowKetquaController@show');
Route::get('xoso', 'App\Http\Controllers\XosoController@show');
Route::get('xoso/get/{day}', 'App\Http\Controllers\XosoController@get');
Route::get('xoso/update/{numberShow}', 'App\Http\Controllers\XosoController@update');
