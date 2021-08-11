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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $model = new persona();
        $model = new cliente();
        $model = new trabajador();
        $model->rol = $request->input('rol');
        $model->nombre1 = $request->input('primer_nombre');
        $model->nombre2 = $request->input('segundo_nombre');
        $model->apellido1 = $request->input('primer_apellido');
        $model->apellido2 = $request->input('segundo_apellido');
        $model->sexo = $request->input('cedula');
        $model->Direccion = $request->input('fecha_de_nacimiento');
        $model->telefono = $request->input('telefono');
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
        //
        $model = cliente::find($id);
        $model->rol = $request->input('rol');
        $model->nombre1 = $request->input('primer_nombre');
        $model->nombre2 = $request->input('segundo_nombre');
        $model->apellido1 = $request->input('primer_apellido');
        $model->apellido2 = $request->input('segundo_apellido');
        $model->sexo = $request->input('cedula');
        $model->Direccion = $request->input('fecha_de_nacimiento');
        $model->telefono = $request->input('telefono');
        return $model->save();









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

        $model=cliente::find($id);
        $model=trabajador::find($id);
        return $model->delete();

    }
}
