<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detalleimpresion;
use App\Models\maestro;

class vistas extends Controller
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

    public function mostrar_impresion(){

    return maestro::select("*")->where("idcategoria",3)->join("detalle-orden-sub,bor,ser","detalle-orden-sub,bor,ser.IdMaestro","=","maestro.idmaestro")->join("cliente","cliente.IdPersona","=","maestro.IdCliente")->join("persona","cliente.IdPersona","=","persona.IdPersona")->get()

    
;        

    }

    public function mostrar_sublimacion(){

   

    return maestro::select("*")->where("idcategoria",1)->join("detalle-orden-sub,bor,ser","detalle-orden-sub,bor,ser.IdMaestro","=","maestro.idmaestro")->join("cliente","cliente.IdPersona","=","maestro.IdCliente")->join("persona","cliente.IdPersona","=","persona.IdPersona")->get()
;        

    }

    public function mostrar_serigrafia(){

   

  
      
        return maestro::select("*")->where("idcategoria",2)->join("detalle-orden-sub,bor,ser","detalle-orden-sub,bor,ser.IdMaestro","=","maestro.idmaestro")->join("cliente","cliente.IdPersona","=","maestro.IdCliente")->join("persona","cliente.IdPersona","=","persona.IdPersona")->get()
;        

    }

    public function mostrar_bordado(){

   

    return maestro::select("*")->where("idcategoria",4)->join("detalle-orden-sub,bor,ser","detalle-orden-sub,bor,ser.IdMaestro","=","maestro.idmaestro")->join("cliente","cliente.IdPersona","=","maestro.IdCliente")->join("persona","cliente.IdPersona","=","persona.IdPersona")->get()
;        

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