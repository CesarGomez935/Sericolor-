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
Route::get('/', function () {
    return view('Inicio');
});

Route::get('Inicio', function () {
    return view('Inicio');
});
Route::get('Acerca', function () {
    return view('Acerca');
});
Route::get('contacto', function () {
    return view('Contactenos');
});
Route::get('servicio', function () {
    return view('Servicios');
});
Route::get('revision', function () {
    return view('Revision');
});

Route::get('form_bordado', function () {
    return view('formBordado');
});
Route::get('login', function () {
    return view('iniciodesesion');
});
Route::get('registro', function () {
    return view('registro');
});
Route::get('menu', function () {
    return view('menu');
});
Route::get('form_sublimacion', function () {
    return view('formSublimacion');
});
Route::get('form_serigrafia', function () {
    return view('formSerigrafia');
});


