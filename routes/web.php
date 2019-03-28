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
Route::post('/send_email', 'FrontEndController@sendEmail')->name('send_email');

Auth::routes();

//ADMIN PAGES
Route::get('/admin', 'HomeController@index')->name('admin');
Route::get('/projects', 'HomeController@projects')->name('projects');
Route::get('/jobs', 'HomeController@jobs')->name('jobs');
Route::get('/letters', 'HomeController@letters')->name('letters');
Route::get('/letter/{id}', 'HomeController@openLetter')->name('letter');
