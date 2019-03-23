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

//FRONT-END pages
Route::get('/', 'FrontEndController@mywork')->name('mywork');
Route::get('/software', 'FrontEndController@software')->name('software');
Route::get('/contact', 'FrontEndController@contact')->name('contact');


Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');
Route::get('/projects', 'HomeController@projects')->name('projects');
Route::get('/users', 'HomeController@users')->name('users');
Route::get('/jobs', 'HomeController@jobs')->name('jobs');
