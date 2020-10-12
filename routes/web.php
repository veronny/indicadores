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
    return redirect()->route('web');
});

Auth::routes();

Route::get('/web', 'Web\PageController@web')->name('web');

Route::get('/home', 'HomeController@index')->name('home');

//Padron Nominal
Route::get('PadronNominal', 'PadronNominalController@index')->name('PadronNominal');

//Convenios
Route::get('convenios', 'ConveniosController@index')->name('convenios');

//FED
Route::get('FED', 'FEDController@index')->name('FED');

//Bechas
Route::get('brechas', 'brechasController@index')->name('brechas');

//Apendis
Route::get('apendis', 'apendisController@index')->name('apendis');

//Poblacion
Route::get('poblacion', 'poblacionController@index')->name('poblacion');
