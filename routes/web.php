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

Route::get('/', [\App\Http\Controllers\Controller::class, 'login']) -> name('login');
Route::get('/main',[\App\Http\Controllers\Controller::class, 'main']) -> name('main');

Route::get('/process',[\App\Http\Controllers\Controller::class,'process']) -> name('process');
Route::get('/process_data',[\App\Http\Controllers\Controller::class,'process_data']) -> name('process_data');

Route::get('/add',[\App\Http\Controllers\Controller::class,'add']) -> name('add');
Route::post('/add',[\App\Http\Controllers\Controller::class,'get_add_data']) -> name('get_add_data');

Route::get('/search',[\App\Http\Controllers\Controller::class,'search']) -> name('search');
Route::get('/search_data',[\App\Http\Controllers\Controller::class,'search_data']) -> name('search_data');

Route::get('/list_add',[\App\Http\Controllers\Controller::class,'list_add']) -> name('list_add');

Route::get('/bulletins_add',[\App\Http\Controllers\Controller::class,'bulletins_add']) -> name('bulletins_add');

Route::get('upload',[\App\Http\Controllers\Controller::class,'uploadpage']);
Route::post('upload',[\App\Http\Controllers\Controller::class,'upload']);

