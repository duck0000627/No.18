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

Route::get('/add',[\App\Http\Controllers\Controller::class,'add']) -> name('add');
Route::post('/add',[\App\Http\Controllers\Controller::class,'get_add_data']) -> name('get_add_data');
