<?php

use App\Http\Controllers\PatientsController;
use Illuminate\Support\Facades\Route;

Route::prefix('/pacientes')->controller(PatientsController::class)->group(function () {
    Route::get('/', 'index')->name('patients.index');
    Route::post('/', 'store')->name('patients.store');
    Route::get('/create', 'create')->name('patients.create');
    Route::get('/{patient}', 'show')->name('patients.show');
    Route::match(['put', 'path'], '/{patient}', 'update')->name('patients.update');
    Route::delete('/{patient}', 'destroy')->name('patients.destroy');
    Route::get('{patient}/edit', 'edit')->name('patients.edit');
});

// GET|HEAD       pacientes ............................................................... patients.index › PatientsController@index
// POST           pacientes ............................................................... patients.store › PatientsController@store
// GET|HEAD       pacientes/create ...................................................... patients.create › PatientsController@create
// GET|HEAD       pacientes/{patient} ....................................................... patients.show › PatientsController@show
// PUT|PATH       pacientes/{patient} ................................................... patients.update › PatientsController@update
// DELETE         pacientes/{patient} ................................................. patients.destroy › PatientsController@destroy
// GET|HEAD       pacientes/{patient}/edit .................................................. patients.edit › PatientsController@edit
