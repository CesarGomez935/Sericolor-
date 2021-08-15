<?php

namespace App\Http\Controllers;
use App\Models\Detalledelpedido;
use Illuminate\Http\Request;

class detalledelpedidocontroller extends Controller
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
 
        $model = new Detalledelpedido();
        $model->tipo_de_pedido = $request->input('Tipo_de_pedido');
        $model->tipo_de_producto = $request->input('tipo_de_producto');
        $model->pechoizquierdo = $request->input('pechoizquierdo');
        $model->pechoderecho = $request->input('pechoderecho');
        $model->mangaizquierda = $request->input('mangaizquierda');
        $model->mangaderecha = $request->input('mangaderecha');
        $model->espalda = $request->input('espalda');
        $model->talla = $request->input('talla');
        $model->caballerodama = $request->input('caballero/dama');
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
