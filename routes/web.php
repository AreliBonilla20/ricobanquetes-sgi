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
    return view('home');
});

//reportes tacticos
Route::get('categorias_servicios', 'CategoriaServicioController@index')->name('categorias_servicios');
Route::get('solicitudes_servicios', 'SolicitudServicioController@index')->name('solicitudes_servicios');
Route::get('categorias_empleados', 'CategoriaEmpleadoController@index')->name('categorias_empleados');
Route::get('servicios_mas_solicitados', 'ServicioMasSolicitadoController@index')->name('servicios_mas_solicitados');
Route::get('categorias_empleados_mas_solicitadas', 'CategoriaEmpleadoMasSolicitadaController@index')->name('categorias_empleados_mas_solicitadas');

Route::get('consultar_categorias_servicios', 'CategoriaServicioController@consultar')->name('consultar_categorias_servicios');
Route::get('consultar_solicitudes_servicios', 'SolicitudServicioController@consultar')->name('consultar_solicitudes_servicios');
Route::get('consultar_categorias_empleados', 'CategoriaEmpleadoController@consultar')->name('consultar_categorias_empleados');
Route::get('consultar_servicios_mas_solicitados', 'ServicioMasSolicitadoController@consultar')->name('consultar_servicios_mas_solicitados');
Route::get('consultar_categorias_empleados_mas_solicitadas', 'CategoriaEmpleadoMasSolicitadaController@consultar')->name('consultar_categorias_empleados_mas_solicitadas');

Route::post('reporte_categorias_servicios', 'CategoriaServicioController@reporte')->name('reporte_categorias_servicios');
Route::post('reporte_solicitudes_servicios', 'SolicitudServicioController@reporte')->name('reporte_solicitudes_servicios');
Route::post('reporte_categorias_empleados', 'CategoriaEmpleadoController@reporte')->name('reporte_categorias_empleados');
Route::post('reporte_servicios_mas_solicitados', 'ServicioMasSolicitadoController@reporte')->name('reporte_servicios_mas_solicitados');
Route::post('reporte_categorias_empleados_mas_solicitadas', 'CategoriaEmpleadoMasSolicitadaController@reporte')->name('reporte_categorias_empleados_mas_solicitadas');

//reportes estrategicos
Route::get('ingresos_categorias', 'IngresoCategoriaController@index')->name('ingresos_categorias');
Route::get('ganancias_categorias', 'GananciaCategoriaController@index')->name('ganancias_categorias');
Route::get('ganancias_totales', 'GananciaTotalController@index')->name('ganancias_totales');


