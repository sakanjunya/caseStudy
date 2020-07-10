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
Route::match(['get', 'post'],'/userInsert','topPage@insert');
Route::match(['get', 'post'],'/userLogin','topPage@login');
Route::match(['get', 'post'],'question/{id}','question@index');
Route::match(['get', 'post'],'teacherTop','TeacherTop@index');
Route::match(['get', 'post'],'class/{id}','classPage@index');
Route::match(['get', 'post'],'studentResult/{id}','StudentResult@index');
Route::match(['get', 'post'],'studentDetail/{id}','StudentDetail@index');
Route::match(['get', 'post'],'checkDialog','CheckDialog@index');
