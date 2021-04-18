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

Route::name('inicio')->get('/', function () { return view('welcome');});
Route::name('basico')->get ('basico/', function () { return view('basico');});
Route::name('campos')->get ('campos/', function () { return view('campos');});
Route::name('evaluar')->get ('evaluar/', function () { return view('evaluar');});
Route::name('calculadora')->get ('calculadora/', function () { return view('calculadora');});
Route::name('validar')->get ('validar/', function () { return view('validar');});
Route::name('comprobar')->get ('comprobar/', function () { return view('comprobar');});

Route::name('valor')->get ('valor/', function () { return view('valor');});

Route::name('jquery')->get ('jquery/', function () { return view('jquery');});
Route::name('Formulario')->get ('Formulario/', function () { return view('Formulario');});
Route::name('practica5')->get ('practica5/', function () { return view('practica5');});
Route::name('examen')->get ('examen/', function () { return view('examen');});

Route::name('random')->get ('random/', function () { return view('random');});
//Route::name('combos')->get ('combos/', function () { return view('combos');});


Route::name('entrada')->get ('entrada/','SistemController@entrada');
Route::name('combos')->get ('combos/','SistemController@combos');
Route::name('datos')->get ('datos/','SistemController@datos');

Route::name('js00')->get ('js00/','JqueryController@js00');
Route::name('js02')->get ('js02/','JqueryController@js02');
Route::name('js02b')->get ('js02b/','JqueryController@js02b');
Route::name('pago')->get ('pago/', function () { return view('pago');});
