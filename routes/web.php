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

Route::get('/graph', 'TopContoroller@graph');
Route::get('/graph2', 'TopContoroller@graph');
Route::get('/', 'TopContoroller@index');
Route::post('/', 'TopContoroller@post');
Route::get('/mail1', 'TopContoroller@index');
Route::get('/mail2', 'TopContoroller@index');
Route::get('/mail3', 'TopContoroller@index');
