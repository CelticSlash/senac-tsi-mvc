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

Route::get('/avisos', function(){
    return view('avisos', [' nome'=> 'Wilson', 
                            'mostrar'=> true, 
                            'avisos' => [[   'id' => 1, 
                                             'texto' => 'Sextou na Enel'], 
                                        [    'id' => 2, 
                                             'texto' => 'Amém Fabio Assunção']]]);
});

Route::get('/exercicio', function(){
    return view('exercicio', ['sextou' => true]);
});
