<?php

use Illuminate\Support\Facades\Route;

Route::get('/','PagesController@home');

//karyawan
// Route::resource('karyawan','KaryawanController');
// Route::post('karyawan/submit','KaryawanController@submit');
Route::get('/karyawan', 'KaryawanController@index');
Route::get('/karyawan/create', 'KaryawanController@create');
Route::post('/karyawan/add', 'KaryawanController@submit');
Route::get('/karyawan/show/{id}', 'KaryawanController@show');
Route::get('/karyawan/edit/{id}', 'KaryawanController@edit');
Route::patch('/karyawan/{karyawan}', 'KaryawanController@update');
Route::delete('/karyawan/{karyawan}', 'KaryawanController@destroy');

// manager
// Route::resource('manager','ManagerController');
Route::get('/manager', 'ManagerController@index');
Route::get('/manager/create', 'ManagerController@create');
Route::post('/manager/add', 'ManagerController@submit');
Route::get('/manager/show/{id}', 'ManagerController@show');
Route::get('/manager/edit/{id}', 'ManagerController@edit');
Route::patch('/manager/{manager}', 'ManagerController@update');
Route::delete('/manager/{manager}', 'ManagerController@destroy');

// proyek
Route::get('/proyek', 'ProyekController@index');

