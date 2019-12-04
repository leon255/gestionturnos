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

Route::get('/home', 'HomeController@index')->name('home');

// |-----------------------------Especialidades-----------------------------|
//Vistas de especialidades
Route::get('/specialties', 'SpecialtyController@index'); //Obtiene la vista de inicio de esp.
Route::get('/specialties/create', 'SpecialtyController@create'); // Formulario para dar de alta.
Route::get('/specialties/{specialty}/edit', 'SpecialtyController@edit'); //Formulario de edicion.

//Procesos ABM
Route::post('/specialties', 'SpecialtyController@store'); //Envio de datos al server para dar de alta
Route::put('/specialties/{specialty}', 'SpecialtyController@update'); //Actualizacion de registro.
Route::delete('/specialties/{specialty}', 'SpecialtyController@destroy'); //Eliminacion de registro.

// |--------------------------------Médicos--------------------------------|
Route::resource('/doctors','DoctorController');