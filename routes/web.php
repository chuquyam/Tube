<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//slider
Route::get('home-slider','App\Http\Controllers\Admin\SliderController@index');
Route::get('add-slider','App\Http\Controllers\Admin\SliderController@create');
Route::post('store-slider','App\Http\Controllers\Admin\SliderController@store');
Route::get('edit-slider/{id}','App\Http\Controllers\Admin\SliderController@edit');
Route::put('update-slider/{id}','App\Http\Controllers\Admin\SliderController@update');
Route::get('concursos/novo','App\Http\Controllers\ConcursoController@create');
Route::post('concursos/novo','App\Http\Controllers\ConcursoController@store')->name('registrar_concurso');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
