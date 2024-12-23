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

Route::get('/', 'IndexController@index');
Route::get('/ar/', 'IndexController@index');
Route::get('/en/', 'IndexController@index');
Route::get('/ar/1/', 'IndexController@mg1');
Route::get('/en/1/', 'IndexController@mg1');
Route::get('/ar/2/', 'IndexController@mg2');
Route::get('/en/2/', 'IndexController@mg2');
Route::get('/ar/news/', 'NewsController@index');
Route::get('/en/news/', 'NewsController@index');
Route::get('/ar/news-details/{id}', 'NewsController@news_details');
Route::get('/en/news-details/{id}', 'NewsController@news_details');
Route::get('/ar/testimonials/', 'TestimonialsController@index');
Route::get('/en/testimonials/', 'TestimonialsController@index');
Route::get('/ar/privacy-policy/', 'PrivacyPolicyController@index');
Route::get('/en/privacy-policy/', 'PrivacyPolicyController@index');
