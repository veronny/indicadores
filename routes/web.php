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
Route::get('fed', 'FEDController@index')->name('fed');

//Bechas
Route::get('brechas', 'brechasController@index')->name('brechas');

//Apendis
Route::get('apendis', 'apendisController@index')->name('apendis');

//Poblacion
Route::get('poblacion', 'poblacionController@index')->name('poblacion');

//SIS - USPP
Route::get('USPP', 'usppController@index')->name('uspp');

//Atendidos y atenciones
Route::get('atendidos', 'atendidosController@index')->name('atendidos');

//Morbilidad
Route::get('moribilidad', 'morbilidadController@index')->name('morbilidad');

//Estrategia
Route::get('estrategia', 'estrategiasController@index')->name('estrategia');

//Operacional Estrategia
Route::get('operacional', 'operacionalController@index')->name('operacional');

//Estrategia
Route::get('etapa_vida', 'etapavidaController@index')->name('etapa_vida');

//Operacional Etapa vida
Route::get('operacional_etapavida', 'operacional_etapavidaController@index')->name('operacional_etapavida');

//Siscovid
Route::get('siscovid', 'siscovidController@index')->name('siscovid');

//Hechos Vitales
Route::get('hechos_vitales', 'vitalesController@index')->name('vitales');

//Vacunas COVID
Route::get('vacuna_covid','vacunacovidController@index')->name('vacuna_covid');
