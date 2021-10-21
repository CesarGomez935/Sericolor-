<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\persona;

class CrudClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
       // return $request->all();

       DB::transaction(function () use ($request) {

         $persona=persona::create([

                'Primer_Nombre'=>$request->primer_nombre,
                'Segundo_Nombre'=>$request->segundo_nombre,
                'Primer_Apellido'=>$request->primer_apellido,
                'Segundo_Apellido'=>$request->segundo_apellido,
                'Cedula'=>$request->cedula,
                'Telefono'=>$request->telefono,
                'Correo'=>$request->correo,
                'Direccion'=>$request->direccion,
                
                

            ]);
            $cliente=cliente::create([


                'IdPersona'=>$persona->IdPersona,
                'TipoDeCliente'=>$request->tipo_de_cliente,
                'Cargo'=>$request->cargo,
                'RUC'=>$request->ruc,
                
                
                

            ]);
           
       });

       return redirect("/menu/menuadmon/clientes");
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
