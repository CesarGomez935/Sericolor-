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
        return Detalledelpedido::select("*")->where("Tipo_de_pedido", "bordado")->join("persona", "persona.IDpersona", "=", "Detalledelpedido.IDdetalledelpedido")->get();
    }

    public function getallpedidoserigrafia()
    {
        //
        //return Detalledelpedido::where("Tipo_de_pedido","serigrafia")->get();
        //agregar idpersona en detalle del pedido
        return Detalledelpedido::select("*")->where("Tipo_de_pedido", "Serigrafia")->join("persona", "persona.IDpersona", "=", "Detalledelpedido.IDdetalledelpedido")->get();
    }

    public function getallpedidoimpresion()
    {
        //
        return Detalledelpedido::select("*")->where("Tipo_de_pedido", "impresion_digital")->join("persona", "persona.IDpersona", "=", "Detalledelpedido.IDdetalledelpedido")->get();
    }

    public function getallpedidosublimacion()
    {
        //
        return Detalledelpedido::select("*")->where("Tipo_de_pedido", "Sublimacion")->join("persona", "persona.IDpersona", "=", "Detalledelpedido.IDdetalledelpedido")->get();
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
        $model->talla18 = $request->input('talla18');
        $model->talla16 = $request->input('talla16');
        $model->talla14 = $request->input('talla14');
        $model->talla12 = $request->input('talla12');
        $model->talla10 = $request->input('talla10');
        $model->talla8 = $request->input('talla8');
        $model->talla6 = $request->input('talla6');
        $model->talla4 = $request->input('talla4');
        $model->talla2 = $request->input('talla8');
        $model->nota = $request->input('nota');
        $model->Nombredelcomprador = $request->input('Nombredelcomprador');
        $model->Telefono = $request->input('Telefono');
        $model->alto1 = $request->input('alto1');
        $model->ancho1 = $request->input('ancho1');
        $model->alto2 = $request->input('alto2');
        $model->ancho2 = $request->input('ancho2');
        $model->alto3 = $request->input('alto3');
        $model->ancho3 = $request->input('ancho3');
        $model->alto4 = $request->input('alto4');
        $model->ancho4 = $request->input('ancho4');
        $model->mtscuadrados1 = $request->input('mtscuadrados1');
        $model->mtscuadrados2 = $request->input('mtscuadrados2');
        $model->mtscuadrados3 = $request->input('mtscuadrados3');
        $model->mtscuadrados4 = $request->input('mtscuadrados4');
        $model->precioxmtscuadrados1 = $request->input('costo1');
        $model->precioxmtscuadrados2 = $request->input('costo2');
        $model->precioxmtscuadrados3 = $request->input('costo3');
        $model->precioxmtscuadrados4 = $request->input('costo4');
        $model->costo1 = $request->input('precioxmtscuadrados1');
        $model->costo2 = $request->input('precioxmtscuadrados2');
        $model->costo3 = $request->input('precioxmtscuadrados3');
        $model->costo4 = $request->input('precioxmtscuadrados4');
        $model->cantidad1 = $request->input('cantidad1');
        $model->cantidad2 = $request->input('cantidad2');
        $model->cantidad3 = $request->input('cantidad3');
        $model->cantidad4 = $request->input('cantidad4');
        $model->total1 = $request->input('total1');
        $model->total2 = $request->input('total2');
        $model->total3 = $request->input('total3');
        $model->total4 = $request->input('total4');
        $model->preciounitario1    = $request->input('preciounitario1');
        $model->preciounitario2    = $request->input('preciounitario2');
        $model->preciounitario3    = $request->input('preciounitario3');
        $model->preciounitario4    = $request->input('preciounitario4');
        $model->cantidadespe1    = $request->input('cantidadespe1');
        $model->cantidadespe2    = $request->input('cantidadespe2');
        $model->cantidadespe3    = $request->input('cantidadespe3');
        $model->cantidadespe4    = $request->input('cantidadespe4');
        $model->especificaciones1   = $request->input('especificaciones1');
        $model->especificaciones2   = $request->input('especificaciones2');
        $model->especificaciones3   = $request->input('especificaciones3');
        $model->especificaciones4   = $request->input('especificaciones4');
        $model->preciototal1=$request->input('preciototal1');
        $model->preciototal2=$request->input('preciototal2');
        $model->preciototal3=$request->input('preciototal3');
        $model->preciototal4=$request->input('preciototal4');
        $model->cantidadtotal=$request->input('cantidadtotal');
        $model->NumeroRuc = $request->input('NumeroRuc');
        $model->fechadepedido = $request->input('fechadepedido');
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
