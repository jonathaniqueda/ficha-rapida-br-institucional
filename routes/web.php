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

Route::get('/', 'SiteController@index')->name('index');
Route::post('/send-email', 'SiteController@sendEmail')->name('send_email');

Route::get('/formularios/{type}', 'SiteController@forms')->name('forms');

Route::group(['as' => 'blog.'], function () {
    Route::get('/artigos', 'BlogController@index')->name('index');
    Route::get('/artigo/{slug}', 'BlogController@article')->name('article');

    Route::get('/categorias', 'CategoryController@index')->name('category.index');
    Route::get('/categoria/{slug}', 'CategoryController@show')->name('category.show');
});
