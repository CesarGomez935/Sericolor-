<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Detalledelpedido;

class editpedido1 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Detalledelpedido::all();

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
        $model=new Detalledelpedido();
         $model->IdMaestro=$request->input('idmaestro');
         $model->IdInsumos=$request->input('IdInsumos');
         $model->IdCategoria=$request->input('IdCategoria');
        $model->pecho_izquierdo=$request->input('pecho_izq');
        $model->pecho_derecho=$request->input('pecho_der');
        $model->manga_izquierda=$request->input('manga_izq');
        $model->manga_derecha=$request->input('manga_der');
        $model->espalda=$request->input('espalda');
        $model->Cantidad=$request->input('cantidad');
        $model->observacion=$request->input('observacion');
        $model->precio=$request->input('precio');
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
         $model=new Detalledelpedido();
         $model=Detalledelpedido::find($id);
         $model->IdInsumos=$request->input('IdInsumos');
        $model->pecho_izquierdo=$request->input('pecho_izq');
        $model->pecho_derecho=$request->input('pecho_der');
        $model->manga_izquierda=$request->input('manga_izq');
        $model->manga_derecha=$request->input('manga_der');
        $model->espalda=$request->input('espalda');
        $model->Cantidad=$request->input('cantidad');
        $model->observacion=$request->input('observacion');
        $model->precio=$request->input('precio');
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
        $model=new Detalledelpedido();
        $model=Detalledelpedido::find($id);
        return $model->delete();
    }
}
