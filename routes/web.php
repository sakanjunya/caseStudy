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

Route::match(['get', 'post'],'/','topPage@index');
Route::match(['get', 'post'],'question','question@index');
Route::match(['get', 'post'],'teacherTop','TeacherTop@index');
Route::match(['get', 'post'],'class','classPage@index');
Route::match(['get', 'post'],'studentResult','StudentResult@index');
Route::match(['get', 'post'],'studentDetail','StudentDetail@index');