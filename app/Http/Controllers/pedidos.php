<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use maestro;
use insumos;
use categoria;
use detalleimpresion;
use Detalledelpedido;
use recibo;
use DB;

class pedidos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return categoria::all();
        return insumos::all();
        return detalleimpresion::all();
        return Detalledelpedido::all();
        return maestro::all();
        return recibo::all();
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

        $maestro=new maestro();
        $insumos=new insumos();
        $detalle=new detalleimpresion;
        $maestro->IdCategoria=$categoria->Idcategoria;
        $maestro->IdCliente=$cliente->Idcliente;
        $maestro->IdUsuario=$usuario->IdUsuario;
        $maestro->fecha=$request->fecha;
        $maestro->notas=$request->Notas;
        $maestro->total_costo=$request->total_costo;
        $maestro->saldo=$request->saldo;
        $maestro->CodSeguimiento=$request->CodSeguimiento;
        $detalles->IdInsumos=$insumos->IdInsumos;
        $detalles->IdMaestro=$maestro->IdMaestro;
        $detalles->pecho_izquierdo=$request->pecho_izquierdo;
        $detalles->pecho_derecho=$request->pecho_derecho;
        $detalles->manga_izquierdo=$request->manga_izquierdo;
        $detalles->manga_derecha=$request->manga_derecha;
        $detalles->espalda=$request->espalda;
        $detalles->cantidad=$request->cantidad;
        $detalles->observacion=$request->observacion;
        


















    
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