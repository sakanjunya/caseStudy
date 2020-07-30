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
Route::match(['get', 'post'],'question/{id}','enquiry@index')->middleware('loginCheck');
Route::match(['get', 'post'],'teacherTop','TeacherTop@index')->middleware('loginCheck');
Route::match(['get', 'post'],'class/{id}','classPage@index')->middleware('loginCheck');
Route::match(['get', 'post'],'studentResult/{id}','StudentResult@index')->middleware('loginCheck');
Route::match(['get', 'post'],'studentDetailAdd/{id}','StudentDetail@insert')->middleware('loginCheck');
Route::match(['get', 'post'],'studentDetail/{id}','StudentDetail@index')->middleware('loginCheck');
Route::match(['get', 'post'],'checkDialog','CheckDialog@index')->middleware('loginCheck');
Route::match(['get', 'post'],'createClassroom','createClassroom@index')->middleware('loginCheck');
Route::match(['get', 'post'],'addToStudent','addToStudent@index')->middleware('loginCheck');
Route::match(['get', 'post'],'insertToStudent','addToStudent@insert')->middleware('loginCheck');
Route::match(['get', 'post'],'commentAdd/{id}','studentDetail@addComment')->middleware('loginCheck');
