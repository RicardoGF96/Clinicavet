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

Route::view('/', 'welcome')->name('welcome'); 
Route::view('/home', 'home')->name('home'); 
Route::view('/equipo', 'equipo')->name('Equipo');
Route::view('/contacto', 'contacto')->name('contacto');
Route::view('/pidehora', 'pidehora')->name('pidehora');
