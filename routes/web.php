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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('/patient', 'PatientController');
Route::resource('/treatment', 'TreatmentDetailController');
Route::post('/search', 'PatientController@search');
<<<<<<< HEAD
Route::get('treatment/seacrh/{id}', 'TreatmentDetailController@search')->name('treatment.history-create');
=======

Route::get('/pdf/{id}','PatientController@pdf');
>>>>>>> 78056f5a3161288dad3633f47ef6b2a667058c80
