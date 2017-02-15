<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::auth();

Route::get('/', 'InicioController@index');
Route::resource('empresa', 'EmpresaController');
Route::resource('sucursal', 'SucursalController');
Route::resource('contacto', 'ContactoController');
Route::get('validacion', 'ValidacionController@index');
Route::post('validacion', 'ValidacionController@update');
Route::post('validacion/vendida', 'ValidacionController@updateVendida');

Route::post('empresa/actualizar/{id}', 'EmpresaController@update');


Route::get('mesa', 'MesaController@index');
Route::post('mesa', 'MesaController@save');
Route::get('mesa/ver/{id}', 'MesaController@ver');

Route::get('inspeccion/vendidas', 'InspeccionController@index');
Route::get('inspeccion/proceso', 'InspeccionController@proceso');
Route::get('inspeccion/vendida/{id}', 'InspeccionController@ver');
Route::get('inspeccion/proceso/{id}', 'InspeccionController@ver_proceso');
Route::post('inspeccion', 'InspeccionController@registrar');


Route::resource('empresa/ver', 'EmpresaController@ver');

Route::resource('grupo', 'GroupController');
Route::post('grupo/show', 'GroupController@show');

Route::get('/reporte_empresas', 'PdfController@pdfEmpresas');

Route::get('/reporte_inspecciones/{id}', 'PdfController@pdfInspecciones');
Route::get('/reporte_sucursales_proceso', 'PdfController@pdfSucursalesProceso');
Route::get('/reporte_sucursales_vedidas', 'PdfController@pdfSucursalesVendidas');


Route::get('/help', function()
{
	return view('help.help');
});