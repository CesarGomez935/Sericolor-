<?php

use App\Http\Controllers\administracion;
use App\Http\Controllers\detalledelpagocontroller;
use App\Http\Controllers\detalledelpedidocontroller;
use App\Http\Controllers\pedidocontroller;
use App\Http\Controllers\persona;
use App\Http\Controllers\reporteController;
use App\Http\Controllers\dbcontroller;
use App\Http\Controllers\maestrocontrolador;
use App\Models\maestro;
use App\Http\Controllers\promocioncontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\maestrocontroladorImpresion;
use App\Http\Controllers\personacontroller;
use App\Http\Controllers\slidercontroller;
use App\Http\Controllers\llamadausuariocontroller;
use App\Http\Controllers\llamadaclientecontroller;
use App\Http\Controllers\usuariocontroller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('pedido', maestrocontrolador::class);
Route::resource('pedidoimp', maestrocontroladorImpresion::class);
Route::resource('promocion',slidercontroller::class);

// Route::resource('detalledelpedido',detalledelpedidocontroller::class);
// Route::resource('administraciones',administracion::class);
Route::resource('trabajador',usuariocontroller::class);
Route::resource('usuario',llamadausuariocontroller::class);
Route::resource('cliente',llamadaclientecontroller::class);
// Route::resource('pedido',pedidocontroller::class);
// Route::resource('detalledelpago',detalledelpagocontroller::class);

// Route::get('getpedidobordado', [detalledelpedidocontroller::class,"getallpedidobordado"]);
// Route::get('getpedidosublimacion', [detalledelpedidocontroller::class,"getallpedidosublimacion"]);
// Route::get('getpedidoserigrafia', [detalledelpedidocontroller::class,"getallpedidoserigrafia"]);
// Route::get('getpedidoimpresion', [detalledelpedidocontroller::class,"getallpedidoimpresion"]);
 Route::get('descargarbasededatos', [dbcontroller::class,"descargar"]);


 //Clientes y trabajadores

Route::get('gettrabajador', [personacontroller::class,"getalltrabajador"]);
Route::get('getcliente', [personacontroller::class,"getallcliente"]);
Route::get('getclientebusqueda', [personacontroller::class,"getcliente"]);