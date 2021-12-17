<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detalleimpresion;

class editpedido3 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return detalleimpresion::all();
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
         $model=new detalleimpresion();
         $model->IdMaestro=$request->input('idmaestro');
         $model->IdInsumos=$request->input('IdInsumos');
        $model->ancho=$request->input('ancho');
         $model->mt2=$request->input('mt2');
        $model->alto=$request->input('alto');
        $model->p_m=$request->input('p_m');
        $model->costo=$request->input('costo');
        $model->Cantidad=$request->input('cantidad');
        $model->observacion=$request->input('observacion');
        $model->total=$request->input('total');
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
        $model=new detalleimpresion();
        $model= detalleimpresion::find($id);
        $model->IdInsumos=$request->input('IdInsumos');
        $model->ancho=$request->input('ancho');
        $model->mt2=$request->input('mt2');
        $model->alto=$request->input('alto');
        $model->p_m=$request->input('p_m');
        $model->costo=$request->input('costo');
        $model->Cantidad=$request->input('cantidad');
        $model->observacion=$request->input('observacion');
        $model->total=$request->input('total');
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
          $model=new detalleimpresion();
        $model=detalleimpresion::find($id);
        return $model->delete();
    }
}
