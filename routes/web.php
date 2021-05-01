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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'clientes'], function(){
    Route::get('/listar', [App\Http\Controllers\ClientesController::class, 'listar']);
    Route::get('/', [App\Http\Controllers\ClientesController::class, 'index']);
});

Route::group(['prefix' => 'users'], function(){
    Route::get('/listar', [App\Http\Controllers\UsersController::class, 'listar'])->middleware('auth');
});

Route::group(['middleware' => ['auth']], function(){
    Route::resource('/users', App\Http\Controllers\UsersController::class);
    Route::resource('/roles', App\Http\Controllers\RoleController::class);
});