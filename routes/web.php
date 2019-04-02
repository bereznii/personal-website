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

//FRONT-VUE
Route::get('/{any}', 'FrontController@index')->where('any', '.*');

Route::post('/projects', 'BackController@getProjects');

Auth::routes();

//ADMIN PAGES
Route::get('/admin', 'HomeController@index')->name('admin');
Route::get('/projects', 'HomeController@projects')->name('projects');
Route::get('/jobs', 'HomeController@jobs')->name('jobs');
Route::get('/letters', 'HomeController@letters')->name('letters');
Route::get('/letter/{id}', 'HomeController@openLetter')->name('letter');
