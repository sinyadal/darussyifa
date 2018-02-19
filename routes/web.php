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


Route::get('/find/{id}', 'TreatmentDetailController@match')->name('treatment.match');

Route::get('patient/{id}/pdf','PatientController@pdf');
