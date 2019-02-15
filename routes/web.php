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

Route::get('/', 'ShortenedLinksController@index')->name('shortened-links.index');
Route::post('/', 'ShortenedLinksController@store')->name('shortened-links.store');
Route::get('/{link}', 'ShortenedLinksController@redirect')->name('shortened-links.redirect');
