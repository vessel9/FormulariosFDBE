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

Route::get('/home', 'PacienteController@index')->name('home');


Route::prefix('/formulario')->group(function () {
    Route::post('/', 'FormularioController@store')->name('home');
    Route::get('/', 'FormularioController@getTipoDiabetes')->name('home');
});
