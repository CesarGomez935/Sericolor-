<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\persona;
use App\Models\usuario;

class usuariocontroller1 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return usuario::all();
        return persona::all();
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
        DB::transaction(function () use($request) {

            $persona=persona::create([

                'Primer_Nombre'=>$request->primer_nombre,
                'Segundo_Nombre'=>$request->segundo_nombre,
                'Primer_Apellido'=>$request->primer_apellido,
                'Segundo_Apellido'=>$request->segundo_apellido,
                'Cedula'=>$request->cedula,
                'Telefono'=>$request->telefono,
                'Direccion'=>$request->direccion,
                'Correo'=>$request->correo,
                

            ]);

            $usuario=usuario::create([

                    'idpersona'=>$persona->IdPersona,                
                    'usuario'=>$request->usuario,
                    'password'=>$request->contrasena,
                    'remember_token'=>$request->contrasena,  
                    'RolAsignado'=>$request->RolAsignado,


            ]);



            
        });
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