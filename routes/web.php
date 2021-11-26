<?php

use Illuminate\Support\Facades\Route;

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
Route::resource('persona', 'PersonaController');
Route::resource('ingresov', 'Ingreso_VehiculoController');
Route::get('imprimirPersonas','PdfController@imprimirPersonas')->name('imprimirPersonas');
// al agregarle {nombre} es agregar otro parametro de nombre x y con esto nos ayuda al controlador
//a que tambien reciba dos parametros y determinar con que nombre se descargara el archivo pdf 
Route::get('imprimirPersona/{imprimirPersona}/{nombre}','PdfController@imprimirPersona')->name('imprimirPersona');
Route::get('cita/calendar', 'CitaController@calendar')->name('cita.calendar');
Route::resource('cita', 'CitaController');
Route::get('form', 'ControllerMail@index');
Route::post('send', 'ControllerMail@send');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
