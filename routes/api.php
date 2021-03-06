<?php

use App\Http\Controllers\administracion;
use App\Http\Controllers\catalogoController;
use App\Http\Controllers\categoriacontroller;
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
use App\Http\Controllers\vistas;
use App\Http\Controllers\editpedido1;
use App\Http\Controllers\editpedido2;
use App\Http\Controllers\editpedido3;
use App\Http\Controllers\facturacioncontroller;
use App\Http\Controllers\ReportesController;
use App\Http\Controllers\revisionController;
use App\Http\Controllers\insumocontroller;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\SliderPrincipalController;

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

Route::resource('pedidoall', facturacioncontroller::class);

Route::resource('pedidosub', maestrocontrolador::class);
Route::resource('pedidoimp', maestrocontroladorImpresion::class);

Route::resource('insumo', insumocontroller::class);
Route::get('getinsumobusqueda/{id}',[ insumocontroller::class,"getinsumobusqueda"]);

Route::resource('promocion',slidercontroller::class);
Route::resource('slider',SliderPrincipalController::class);
Route::get('servicios',[ServiciosController::class,"showall"]);
Route::get('catalogo',[catalogoController::class,"index"]);

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
 Route::get('descargarclientes', [dbcontroller::class,"Exportarclientes"]);
 Route::get('descargarusuarios', [dbcontroller::class,"Exportarusuarios"]);

Route::get('descargarpedidos1', [dbcontroller::class,"Exportarpedidos1"]);
Route::get('descargarpedidos2', [dbcontroller::class,"Exportarpedidos2"]);
Route::get('descargarpedidos3', [dbcontroller::class,"Exportarpedidos3"]);
Route::get('descargarpedidos4', [dbcontroller::class,"Exportarpedidos4"]);


 //Clientes y trabajadores getinsumoimpdigital
Route::get('getallinsumos',[insumocontroller::class,"getallinsumos"]);
Route::get('getinsumoimpdigital',[insumocontroller::class,"getinsumoimpdigital"]);
Route::get('getinsumosub',[insumocontroller::class,"getinsumosub"]);
Route::get('getinsumoser',[insumocontroller::class,"getinsumoser"]);
Route::get('getinsumobor',[insumocontroller::class,"getinsumobor"]);
Route::get('getinsumomult',[insumocontroller::class,"getinsumomult"]);

Route::get('getcategorias',[categoriacontroller::class,"getcategorias"]);

Route::get('gettrabajador', [personacontroller::class,"getalltrabajador"]);
Route::get('getcliente', [personacontroller::class,"getallcliente"]);
Route::get('getclientebusqueda/{nombre}', [personacontroller::class,"getclientebusqueda"]);

Route::get('getimpresion', [vistas::class,"mostrar_impresion"]);
Route::get('getsublimacion', [vistas::class,"mostrar_sublimacion"]);
Route::get('getserigrafia', [vistas::class,"mostrar_serigrafia"]);
Route::get('getbordado', [vistas::class,"mostrar_bordado"]);
Route::get('getallpedidos', [vistas::class,"getallpedidos"]);
Route::get('getallpedidosbusqueda/{id}', [vistas::class,"getallpedidosbusqueda"]);

Route::get('/getdetalles/{id}', [vistas::class,"getdetalles"]);
Route::get('/getdetalles1/{id}', [vistas::class,"getdetalles1"]);
Route::put('/updatedetalles/{id}', [vistas::class,"updatedetalles"]);
Route::resource('/actualizar', editpedido1::class);
Route::resource('/actualizarrecibo', editpedido2::class);
Route::resource('/actualizar1', editpedido3::class);

Route::get('/revision/{id}', [revisionController::class,"show"]);

Route::get('/pdf/personal', [ReportesController::class,"getpersonal"]);
Route::get('/pdf/personal/descargar', [ReportesController::class,"createPDFpersonal"]);

Route::get('/pdf/pedidos_diarios/{fecha}', [ReportesController::class,"getpedidosdiarios"]);
Route::get('/pdf/pedidos_diarios/{fecha}/descargar', [ReportesController::class,"createPDFpedidosdiarios"]);
Route::get('/pdf/pedidos_entre/{fecha1}/{fecha2}', [ReportesController::class,"getpedidosrango"]);
Route::get('/pdf/pedidos_entre/{fecha1}/{fecha2}/descargar', [ReportesController::class,"createPDFpedidosrango"]);

Route::get('/pdf/Factura_sub/{id}', [ReportesController::class,"getfacturaSub"]);
Route::get('/pdf/Factura_sub/{id}/descargar', [ReportesController::class,"createPDFfacturaSub"]);

Route::get('/pdf/Factura_imp/{id}', [ReportesController::class,"getfacturaImp"]);
Route::get('/pdf/Factura_imp/{id}/descargar', [ReportesController::class,"createPDFfacturaImp"]);

Route::get('/pdf/ventas_insumos/{fecha1}/{fecha2}', [ReportesController::class,"getinsumosrango"]);
Route::get('/pdf/ventas_insumos/{fecha1}/{fecha2}/descargar', [ReportesController::class,"createPDFinsumos"]);

Route::get('/pdf/ventas_insumos/{idinsumo}/{fecha1}/{fecha2}', [ReportesController::class,"getinsumosrangoidsub"]);
Route::get('/pdf/ventas_insumos/{idinsumo}/{fecha1}/{fecha2}/descargar', [ReportesController::class,"createPDFinsumosrangoidsub"]);

Route::get('/pdf/ventas_insumosimp/{idinsumo}/{fecha1}/{fecha2}', [ReportesController::class,"getinsumosrangoidimp"]);
Route::get('/pdf/ventas_insumosimp/{idinsumo}/{fecha1}/{fecha2}/descargar', [ReportesController::class,"createPDFinsumosrangoidimp"]);

Route::get('/pdf/tipodepagoid_entre/{tipodepago}/{fecha1}/{fecha2}', [ReportesController::class,"getpedidosrangoTipodepago"]);
Route::get('/pdf/tipodepagoid_entre/{tipodepago}/{fecha1}/{fecha2}/descargar', [ReportesController::class,"createPDFpedidosrangoTipodepago"]);

Route::get('/pdf/estado_entre/{estado}/{fecha1}/{fecha2}', [ReportesController::class,"getpedidosrangoestado"]);
Route::get('/pdf/estado_entre/{estado}/{fecha1}/{fecha2}/descargar', [ReportesController::class,"createPDFpedidosrangoestado"]);

Route::get('/pdf/cliente_entre/{id}/{fecha1}/{fecha2}', [ReportesController::class,"getpedidoscliente"]);
Route::get('/pdf/cliente_entre/{id}/{fecha1}/{fecha2}/descargar', [ReportesController::class,"createPDFpedidoscliente"]); 
