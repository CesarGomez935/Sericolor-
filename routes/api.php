<?php

use App\Http\Controllers\administracion;
use App\Http\Controllers\detalledelpagocontroller;
use App\Http\Controllers\detalledelpedidocontroller;
use App\Http\Controllers\persona;
use App\Http\Controllers\reporteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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
Route::resource('detalledelpedido',detalledelpedidocontroller::class);
Route::resource('administraciones',administracion::class);
Route::resource('trabajador',persona::class);
Route::resource('cliente',persona::class);
Route::resource('detalledelpago',detalledelpagocontroller::class);
Route::get('gettrabajador', [persona::class,"getalltrabajador"]);
