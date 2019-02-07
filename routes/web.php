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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@service');
Route::get('/prices', 'PagesController@price');
Route::get('/support', 'PagesController@support');
Route::get('/newsletter', 'NewsletterController@create');
Route::post('/newsletter/store', 'NewsletterController@store');
Route::get('/contact', 'ContactController@index')->name('contact.contact_form');
Route::post('/contact/send', 'ContactController@send');
