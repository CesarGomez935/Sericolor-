<?php

namespace App\Http\Controllers;
use App\Models\pedidos;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Validation\Rules;
use Detalledelpedido;
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
        $detalles=json_decode($request->input('detalledelpedido'));
        try{
            Db::beginTransaction('detalledelpedido');
            $model->save();
            $this->detalle($model,$detalles);
            DB::commit();
        }catch(\Exception $e)
        {

        }
        return $model;
    }
    private function detalle($model,$detalles){
        
        foreach($detalles as $detalle){
            $model->detalle()->insert([
            'IDpedido'=>$detalle->IDpedido,
            'Tipo_de_pedido'=>$detalle->Tipo_de_pedido,
            'tipo_de_producto'=>$detalle->tipo_de_producto,
            'pechoizquierdo'=>$detalle->pechoizquierdo,
            'pechoderecho'=>$detalle->pechoderecho,
            'mangaizquierda'=>$detalle->mangaizquierda,
            'mangaderecha'=>$detalle->mangaderecha,
            'espalda'=>$detalle->espalda,
            'tallasCaballero'=>$detalle->tallasCaballero,
            'tallamCaballero'=>$detalle->tallamCaballero,
            'tallalCaballero'=>$detalle->tallalCaballero,
            'tallaxlCaballero'=>$detalle->tallaxlCaballero,
            'talla2xlCaballero'=>$detalle->talla2xlCaballero,
            'talla3xlCaballero'=>$detalle->talla3xlCaballero,
            'talla5xlCaballero'=>$detalle->talla5xlCaballero,
            'tallasDama'=>$detalle->tallasDama,
            'tallamDama'=>$detalle->tallamDama,
            'tallalDama'=>$detalle->tallalDama,
            'tallaxlDama'=>$detalle->tallaxlDama,
            'talla2xlDama'=>$detalle->talla2xlDama,
            'talla3xlDama'=>$detalle->talla3xlDama,
            'talla5xlDama'=>$detalle->talla5xlDama,
            'talla18'=>$detalle->talla18,
            'talla16'=>$detalle->talla16,
            'talla14'=>$detalle->talla14,
            'talla12'=>$detalle->talla12,
            'talla10'=>$detalle->talla10,
            'talla8'=>$detalle->talla8,
            'talla6'=>$detalle->talla6,
            'talla4'=>$detalle->talla4,
            'talla2'=>$detalle->talla2,
            'talla18'=>$detalle->talla18,
            'nota'=>$detalle->nota,
            'Nombredelcomprador'=>$detalle->Nombredelcomprador,
            'Telefono'=>$detalle->Telefono,
            'alto1'=>$detalle->alto1,
            'alto2'=>$detalle->alto2,
            'alto3'=>$detalle->alto3,
            'alto4'=>$detalle->alto4,
            'ancho1'=>$detalle->ancho1,
            'ancho2'=>$detalle->ancho2,
            'ancho3'=>$detalle->ancho3,
            'ancho4'=>$detalle->ancho4,
            'mtscuadrados1'=>$detalle->mtscuadrados1,
            'mtscuadrados2'=>$detalle->mtscuadrados2,
            'mtscuadrados3'=>$detalle->mtscuadrados3,
            'mtscuadrados4'=>$detalle->mtscuadrados4,
            'costo1'=>$detalle->costo1,
            'costo2'=>$detalle->costo2,
            'costo3'=>$detalle->costo3,
            'costo4'=>$detalle->costo4,
            'precioxmtscuadrados1'=>$detalle->precioxmtscuadrados1,
            'precioxmtscuadrados2'=>$detalle->precioxmtscuadrados2,
            'precioxmtscuadrados3'=>$detalle->precioxmtscuadrados3,
            'precioxmtscuadrados4'=>$detalle->precioxmtscuadrados4,
            'cantidad1'=>$detalle->cantidad1,
            'cantidad2'=>$detalle->cantidad2,
            'cantidad3'=>$detalle->cantidad3,
            'cantidad4'=>$detalle->cantidad4,
            'total1'=>$detalle->total1,
            'total2'=>$detalle->total2,
            'total3'=>$detalle->total3,
            'total4'=>$detalle->total4,
            'preciounitario1'=>$detalle->preciounitario1,
            'preciounitario2'=>$detalle->preciounitario2,
            'preciounitario3'=>$detalle->preciounitario3,
            'preciounitario4'=>$detalle->preciounitario4,
            'cantidadespe1'=>$detalle->cantidadespe1,
            'cantidadespe2'=>$detalle->cantidadespe2,
            'cantidadespe3'=>$detalle->cantidadespe3,
            'cantidadespe4'=>$detalle->cantidadespe4,
            'especificaciones1'=>$detalle->especificaciones1,
            'especificaciones2'=>$detalle->especificaciones2,
            'especificaciones3'=>$detalle->especificaciones3,
            'especificaciones4'=>$detalle->especificaciones4,
            'preciototal1'=>$detalle->preciototal1,
            'preciototal2'=>$detalle->preciototal2,
            'preciototal3'=>$detalle->preciototal3,
            'preciototal4'=>$detalle->preciototal4,
            'cantidadtotal'=>$detalle->cantidadtotal,
            'NumeroRuc'=>$detalle->NumeroRuc,
            'fechadepedido'=>$detalle->fechadepedido,
            ]);
        }









    




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