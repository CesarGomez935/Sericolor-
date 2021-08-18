<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\trabajador;
use Illuminate\Http\Request;

class persona extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$trabajador= trabajador::where("rol","trabajador")->get();

       // return trabajador::where("rol","trabajador")->get();

        //return cliente::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function getalltrabajador()
    {

        return trabajador::where("rol","trabajador")->get();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $model = new trabajador();
        $model = new cliente();
        $model->Rol = $request->input('Rol');
        $model->primer_nombre = $request->input('primer_nombre');
        $model->segundo_nombre = $request->input('segundo_nombre');
        $model->primer_apellido = $request->input('primer_apellido');
        $model->segundo_apellido = $request->input('segundo_apellido');
        $model->cedula = $request->input('cedula');
        $model->tipodepersona = $request->input('tipodepersona');
        $model->correo = $request->input('correo');
        $model->telefono = $request->input('telefono');
        $model->RolAsignado = $request->input('RolAsignado');
        return $model->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {










    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //



    }
}
