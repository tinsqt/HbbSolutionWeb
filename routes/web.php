<?php

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

Route::get('/', 'Controller@getIndex');
Route::get('language/{locale}','Controller@SetLanguage');
Route::get('/san-pham-hbb.html','Controller@getPageProduct');
Route::get('/dich-vu-hbb.html','Controller@getPageService');
Route::get('/doi-tac-hbb.html','Controller@getPageClient');
Route::get('/gioi-thieu-hbb.html','Controller@getPageAbout');
Route::get('/lien-he-hbb.html','Controller@getPageContact');