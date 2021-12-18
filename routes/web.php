<?php

use App\Http\Controllers\CrudClienteController;
use App\Http\Controllers\CrudTrabajadorController;
use App\Http\Controllers\detalledelpedidocontroller;
use App\Http\Controllers\reporteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dbcontroller;
use App\Http\Controllers\persona;
use App\Http\Controllers\promocioncontroller;
use App\Http\Controllers\maestrocontrolador;
Use App\Http\Controllers\vistas;
Use App\Http\Controllers\maestrocontroladorImpresion;
Use App\Http\Controllers\logincontroller;
use App\Http\Controllers\pruebacontroller;
use App\Http\Controllers\SliderPrincipalController;
Use Barryvdh\DomPDF\Facade as PDF;


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
Route::get('recuperar', function () {
    return view('recuperarcontrasena');
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
Route::get('login', [logincontroller::class,"index"])->name('login.index');
// Route::get('login1', [logincontroller::class,"index"]);
Route::post('login1/verificar', [logincontroller::class,"validarcredenciales"])->name("login.verificar");
Route::get('login/cerrar', [logincontroller::class,"cierredesesion"]);
Route::get('registro', function () {
    return view('registro');
});



// Route::get('/pdf', function () {
//   $pdf = PDF::loadView('reportes.personal');
//   return $pdf->download('pruebapdf.pdf');
// });

// Route::get('/pdf/personal', function () {
//      return view('reportes.personal');

// });



// Route::get('/editform_sublimacion', function () {
//     return view('EditarformSublimacion');
// });
// Route::get('/editform_serigrafia', function () {
//     return view('EditarformSerigrafia');
// });

// Route::get('/editform_impresion_digital', function () {
//     return view('EditarformImpresion');
// });

//Middleware que autentica todo el sistema
Route::middleware(['autenticado'])->group(function(){
    Route::get('menu', [pruebacontroller::class,"index"])->name("login.menu");

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

// Route::get('login', function () {
//     return view('iniciodesesion');
// });




Route::get('menu/menu_facturacion', function () {
    return view('menufacturacion');
});



/* Formularios de facturacion */



Route::get('/menu/menu_facturacion/form_bordado', function () {
    return view('formBordado');
});

Route::get('/menu/facturacion', function () {
    return view('formFacturacion');
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
Route::get('menu/menuadmon/insumos', function () {
    return view('insumo');
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

//Route::resource('Detalledelpedido',detalledelpedidocontroller::class);

Route::get('/descargarbasededatos', [dbcontroller::class,"descargar"]);

// Route::get('/menu/menuadmon/personal/agregar_personal/{id}/edit', [persona::class,"edittrabajador"])->name("trabajador.edit");

// Route::put('/menu/menuadmon/personal/agregar_personal/{id}', [persona::class,"updatetrabajador"])->name("trabajador.update");

// Route::get('/menu/menuadmon/personal/{id}', [persona::class,"destroytrabajador"])->name("trabajador.destroy");

// Route::get('/menu/menuadmon/clientes/agregar_cliente/{id}/edit', [persona::class,"editcliente"])->name("cliente.edit");

// Route::put('/menu/menuadmon/clientes/agregar_clientes/{id}', [persona::class,"updatecliente"])->name("cliente.update");

// Route::get('/menu/menuadmon/clientes/{id}', [persona::class,"destroycliente"])->name("cliente.destroy");

Route::get('menu/menuadmon/promociones', [promocioncontroller::class,"index"]);
Route::get('menu/menuadmon/promociones/create', [promocioncontroller::class,"create"]);
Route::post('menu/menuadmon/promociones/create', [promocioncontroller::class,"store"]);
Route::get("menu/menuadmon/promociones/edit/{id}",[promocioncontroller::class,"edit"]);
Route::put("menu/menuadmon/promociones/edit/{id}",[promocioncontroller::class,"update"]);
Route::get("menu/menuadmon/promociones/delete/{id}",[promocioncontroller::class,"destroy"]);


Route::get('menu/menuadmon/slider/create', [SliderPrincipalController::class,"create"]);
Route::post('menu/menuadmon/slider/create', [SliderPrincipalController::class,"store"]);
Route::get("menu/menuadmon/slider/edit/{id}",[SliderPrincipalController::class,"edit"]);
Route::put("menu/menuadmon/slider/edit/{id}",[SliderPrincipalController::class,"update"]);
Route::get("menu/menuadmon/slider/delete/{id}",[SliderPrincipalController::class,"destroy"]);


//clientes

Route::post('/menu/menuadmon/clientes/agregar_cliente', [CrudClienteController::class,"store"])->name("cliente.store");
Route::get('/menu/menuadmon/clientes/agregar_cliente/{id}/edit',[CrudClienteController::class,"edit"])->name("cliente.edit");
Route::put('/menu/menuadmon/clientes/agregar_cliente/{id}', [CrudClienteController::class,"update"])->name("cliente.update");
Route::get('/menu/menuadmon/clientes/{id}', [CrudClienteController::class,"destroy"])->name("cliente.destroy");

//trabajadores

Route::post('/menu/menuadmon/personal/agregar_personal', [CrudTrabajadorController::class,"store"])->name("trabajador.store");
Route::get('/menu/menuadmon/personal/agregar_personal/{id}/edit',[CrudTrabajadorController::class,"edit"])->name("trabajador.edit");
Route::put('/menu/menuadmon/personal/agregar_personal/{id}', [CrudTrabajadorController::class,"update"])->name("trabajador.update");
Route::get('/menu/menuadmon/personal/{id}', [CrudTrabajadorController::class,"destroy"])->name("trabajador.destroy");


// Route::get('/editform_bordado', function () {
//     return view('EditarformBordado');
// });
//edidcion de formulario serigrafia
Route::get('/menu/menu_facturacion/form_serigrafia/{id}/edit',[maestrocontrolador::class,"edit"])->name("maestro.edit");
Route::put('/menu/menu_facturacion/form_serigrafia/{id}', [maestrocontrolador::class,"update"])->name("maestro.update");


//edicion de formulario de bordado

Route::get('/menu/menu_facturacion/form_bordado/{id}/edit',[maestrocontrolador::class,"editbordado"])->name("maestro.editbordado");
Route::put('/menu/menu_facturacion/form_bordado/{id}', [maestrocontrolador::class,"editbordado"])->name("maestro.updatebordado");

//edicion de formulario de sublimacion
Route::get('/menu/menu_facturacion/form_sublimacion/{id}/edit',[maestrocontrolador::class,"editsublimacion"])->name("maestro.editsublimacion");
Route::put('/menu/menu_facturacion/form_sublimacion/{id}', [maestrocontrolador::class,"editsublimacion"])->name("maestro.editsublimacion");
//edicion de formulario de impresion digital
Route::get('/menu/menu_facturacion/form_impresion_digital/{id}/edit',[maestrocontrolador::class,"editimpresion"])->name("maestro.editimpresion");
Route::put('/menu/menu_facturacion/form_impresion_digital/{id}', [maestrocontrolador::class,"editimpresion"])->name("maestro.update");


//edicion de pedidos
Route::get('/menu/facturacion/{id}/edit',[maestrocontrolador::class,"editpedido"])->name("maestro.editpedido");
Route::put('/menu/facturacion/{id}', [maestrocontrolador::class,"editpedido"])->name("maestro.editpedido");




















});