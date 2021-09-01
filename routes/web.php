<?php

use App\Http\Controllers\detalledelpedidocontroller;
use App\Http\Controllers\reporteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dbcontroller;


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
    return view('Inicio');
});

Route::get('Inicio', function () {
    return view('Inicio');
});
Route::get('acerca', function () {
    return view('Acerca');
});

Route::get('servicio', function () {
    return view('Servicios');
});
Route::get('revision', function () {
    return view('Revision');
});
Route::get('galeria', function () {
    return view('galeria');
});



/* Back-End */
Route::get('menu', function () {
    return view('menu');
});


Route::get('menu/pedidos_bordado', function () {
    return view('pedidosBordado');
});

Route::get('menu/pedidos_sublimacion', function () {
    return view('pedidosSublimacion');
});

Route::get('menu/pedidos_impresion_digital', function () {
    return view('pedidosImpresionDigital');
});

Route::get('menu/pedidos_serigrafia', function () {
    return view('pedidosSerigrafia');
});

Route::get('login', function () {
    return view('iniciodesesion');
});

Route::get('registro', function () {
    return view('registro');
});

Route::get('menu/menu_facturacion', function () {
    return view('menufacturacion');
});



/* Formularios de facturacion */



Route::get('/menu/menu_facturacion/form_bordado', function () {
    return view('formBordado');
});



Route::get('/menu/menu_facturacion/form_sublimacion', function () {
    return view('formSublimacion');
});
Route::get('/menu/menu_facturacion/form_serigrafia', function () {
    return view('formSerigrafia');
});

Route::get('/menu/menu_facturacion/form_impresion_digital', function () {
    return view('formImpresion');
});

/* Administración */

Route::get('menu/menuadmon', function () {
    return view('menuadministracion');
});

Route::get('menu/menuadmon/bd', function () {
    return view('basededatos');
});


Route::get('menu/menuadmon/personal', function () {
    return view('personal');
});

Route::get('menu/menuadmon/personal/agregar_personal', function () {
    return view('agregarPersonal');
});

Route::get('menu/menuadmon/clientes', function () {
    return view('cliente');
});

Route::get('menu/menuadmon/clientes/agregar_cliente', function () {
    return view('agregarCliente');
});

Route::get('menu/menuadmon/reportes', function () {
    return view('Reportes');
});

Route::get('menu/menuadmon/resumen_pedidos', function () {
    return view('ResumenPedidos');
});

Route::resource('Detalledelpedido',detalledelpedidocontroller::class);

Route::get('/descargarbasededatos', [dbcontroller::class,"descargar"]);
