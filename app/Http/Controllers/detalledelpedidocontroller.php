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

    public function getallpedidobordado()
    {
        //
      return Detalledelpedido::where("Tipo_de_pedido","bordado")->get();
    }

    public function getallpedidoserigrafia()
    {
        //
      //return Detalledelpedido::where("Tipo_de_pedido","serigrafia")->get();
      //agregar idpersona en detalle del pedido
      return Detalledelpedido::select("*")->join("persona","persona.IDpersona","=","Detalledelpedido.IDdetalledelpedido")->get();


    }

    public function getallpedidoimpresion()
    {
        //
      return Detalledelpedido::where("Tipo_de_pedido","impresion digital")->get();
    }

    public function getallpedidosublimacion()
    {
        //
      return Detalledelpedido::where("Tipo_de_pedido","sublimacion")->get();
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
        $model->Tipo_de_pedido = $request->input('Tipo_de_pedido');
        $model->tipo_de_producto = $request->input('tipo_de_producto');
        $model->pechoizquierdo = $request->input('pechoizquierdo');
        $model->pechoderecho = $request->input('pechoderecho');
        $model->mangaizquierda = $request->input('mangaizquierda');
        $model->mangaderecha = $request->input('mangaderecha');
        $model->espalda = $request->input('espalda');
        $model->tallasCaballero = $request->input('tallasCaballero');
        $model->tallamCaballero = $request->input('tallamCaballero');
        $model->tallalCaballero = $request->input('tallalCaballero');
        $model->tallaxlCaballero = $request->input('tallaxlCaballero');
        $model->talla2xlCaballero = $request->input('talla2xlCaballero');
        $model->talla3xlCaballero = $request->input('talla3xlCaballero');
        $model->talla5xlCaballero = $request->input('talla5xlCaballero');
        $model->tallasDama = $request->input('tallasDama');
        $model->tallamDama = $request->input('tallamDama');
        $model->tallalDama = $request->input('tallalDama');
        $model->tallaxlDama = $request->input('tallaxlDama');
        $model->talla2xlDama = $request->input('talla2xlDama');
        $model->talla3xlDama = $request->input('talla3xlDama');
        $model->talla5xlDama = $request->input('talla5xlDama');
        $model->tallainfantil = $request->input('tallainfantil');
        $model->alto = $request->input('alto');
        $model->ancho = $request->input('ancho');
        $model->precio_cantidad = $request->input('precio_cantidad');
        $model->cantidad = $request->input('cantidad');
        $model->nota = $request->input('nota');
        $model->ancho = $request->input('ancho');
        $model->Nombredelcomprador = $request->input('Nombredelcomprador');
        $model->Telefono = $request->input('Telefono');
        $model->NumeroRuc = $request->input('NumeroRuc');
        $model->fechadepedido=$request->input('fechadepedido');
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
