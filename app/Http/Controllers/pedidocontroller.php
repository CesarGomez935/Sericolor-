<?php

namespace App\Http\Controllers;
use App\Models\pedidos;
use Illuminate\Http\Request;

class pedidocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return pedidos::all();
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
        $model = new pedidos();
        $model->tipo_de_pedido = $request->input('Tipo_de_pedido');
        $model->tipo_de_producto = $request->input('tipo_de_producto');
        $model->pecho_izquierdo = $request->input('pechoizquierdo');
        $model->pecho_derecho = $request->input('pechoderecho');
        $model->manga_izquierda = $request->input('mangaizquierda');
        $model->manga_derecha = $request->input('mangaderecha');
        $model->espalda = $request->input('espalda');
        $model->talla = $request->input('talla');
        $model->caballero_dama = $request->input('caballero/dama');
        $model->tallainfantil = $request->input('tallainfantil');
        $model->alto = $request->input('alto');
        $model->ancho = $request->input('ancho');
        $model->precio_cantidad = $request->input('precio_cantidad');
        $model->cantidad = $request->input('cantidad');
        $model->nota = $request->input('nota');     
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
        $model = pedidos::find($id);
        $model->tipo_de_pedido = $request->input('Tipo_de_pedido');
        $model->tipo_de_producto = $request->input('tipo_de_producto');
        $model->pecho_izquierdo = $request->input('pechoizquierdo');
        $model->pecho_derecho = $request->input('pechoderecho');
        $model->manga_izquierda = $request->input('mangaizquierda');
        $model->manga_derecha = $request->input('mangaderecha');
        $model->espalda = $request->input('espalda');
        $model->talla = $request->input('talla');
        $model->caballero_dama = $request->input('caballero/dama');
        $model->tallainfantil = $request->input('tallainfantil');
        $model->alto = $request->input('alto');
        $model->ancho = $request->input('ancho');
        $model->precio_cantidad = $request->input('precio_cantidad');
        $model->cantidad = $request->input('cantidad');
        $model->nota = $request->input('nota');     
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
        $model=pedidos::find($id);
        return $model->delete();
    }
}