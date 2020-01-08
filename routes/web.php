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


// JENIS
Route::get('/jenis', 'JenisController@index');
Route::post('/jenis', 'JenisController@store');
Route::get('/jenis/edit/{jenis}', 'JenisController@edit');
Route::patch('/jenis/{jenis}', 'JenisController@update');
Route::delete('/jenis/{jenis}', 'JenisController@destroy');


// RUANG
Route::get('/ruangs', 'RuangController@index');
Route::post('/ruangs', 'RuangController@store');
Route::get('/ruangs/edit/{ruang}', 'RuangController@edit');
Route::patch('/ruangs/{ruang}', 'RuangController@update');
Route::delete('/ruangs/{ruang}', 'RuangController@destroy');

// LEVEL
Route::get('/levels', 'LevelController@index');
Route::post('/levels', 'LevelController@store');
Route::get('/levels/edit/{level}', 'LevelController@edit');
Route::patch('/levels/{level}', 'LevelController@update');
Route::delete('/levels/{level}', 'LevelController@destroy');


// PETUGAS
Route::get('/petugas', 'PetugasController@index');
Route::post('/petugas', 'PetugasController@store');
Route::get('/petugas/edit/{petugas}', 'PetugasController@edit');
Route::patch('/petugas/{petugas}', 'PetugasController@update');
Route::delete('/petugas/{petugas}', 'PetugasController@destroy');


// PEGAWAI
Route::get('/pegawais', 'PegawaiController@index');
Route::post('/pegawais', 'PegawaiController@store');
Route::get('/pegawais/edit/{pegawai}', 'PegawaiController@edit');
Route::patch('/pegawais/{pegawai}', 'PegawaiController@update');
Route::delete('/pegawais/{pegawai}', 'PegawaiController@destroy');


// INVENTARIS
Route::get('/inventaris', 'InventarisController@index');
Route::get('/inventaris/create', 'InventarisController@create');
Route::post('/inventaris/create/{inventaris}', 'InventarisController@store');
