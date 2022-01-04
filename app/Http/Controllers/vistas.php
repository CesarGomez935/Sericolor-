<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detalleimpresion;
use App\Models\maestro;
use App\Models\Detalledelpedido;
use Illuminate\Support\Facades\DB;

class vistas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // return Detalledelpedido::all();
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



    public function mostrar_sublimacion()
    {



        return maestro::select("*")->where("maestro.IdCategoria",1)->join("recibo","recibo.IdMaestro","=","maestro.idmaestro")->join("tipo_de_pago","tipo_de_pago.idtipo_de_pago","=","recibo.idtipo_de_pago")->join("cliente","cliente.IdCliente","=","maestro.IdCliente")->join("persona","cliente.IdPersona","=","persona.IdPersona")->orderBy("maestro.idmaestro","DESC")->get();

    }

    public function mostrar_serigrafia(){





        return maestro::select("*")->where("idcategoria",2)->join("recibo","recibo.IdMaestro","=","maestro.idmaestro")->join("tipo_de_pago","tipo_de_pago.idtipo_de_pago","=","recibo.idtipo_de_pago")->join("cliente","cliente.IdCliente","=","maestro.IdCliente")->join("persona","cliente.IdPersona","=","persona.IdPersona")->orderBy("maestro.idmaestro","DESC")->get();

    }
    public function mostrar_impresion(){

        return maestro::select("*")->where("idcategoria",3)->join("recibo","recibo.IdMaestro","=","maestro.idmaestro")->join("tipo_de_pago","tipo_de_pago.idtipo_de_pago","=","recibo.idtipo_de_pago")->join("cliente","cliente.IdCliente","=","maestro.IdCliente")->join("persona","cliente.IdPersona","=","persona.IdPersona")->orderBy("maestro.idmaestro","DESC")->get();

    }

    public function mostrar_bordado(){



        return maestro::select("*")->where("idcategoria",4)->join("recibo","recibo.IdMaestro","=","maestro.idmaestro")->join("tipo_de_pago","tipo_de_pago.idtipo_de_pago","=","recibo.idtipo_de_pago")->join("cliente","cliente.IdCliente","=","maestro.IdCliente")->join("persona","cliente.IdPersona","=","persona.IdPersona")->orderBy("maestro.idmaestro","DESC")->get();

    }

    public function getdetalles($id){

       // $detalles=new Detalledelpedido();
         return $detalles = Detalledelpedido::select("*")->where("IdMaestro",$id)->join("insumos","insumos.IdInsumo","=","detalle-orden-sub,bor,ser.IdInsumos")->get();


    }
    public function getdetalles1($id){

       // $detalles=new Detalledelpedido();
         return $detalles = detalleimpresion::select("*")->where("IdMaestro",$id)->join("insumos","insumos.IdInsumo","=","detalle-orden-imp.IdInsumos")->get();


    }


    public function getallpedidos(){





        return maestro::select("*")->join("cliente","cliente.IdCliente","=","maestro.IdCliente")->join("persona","cliente.IdPersona","=","persona.IdPersona")->join("recibo","recibo.IdMaestro","=","maestro.idmaestro")->join("tipo_de_pago","tipo_de_pago.idtipo_de_pago","=","recibo.idtipo_de_pago")->orderBy("maestro.idmaestro","DESC")->get();

    }

    public function getallpedidosbusqueda($id){





        return maestro::select("*")->join("cliente","cliente.IdCliente","=","maestro.IdCliente")->join("persona","cliente.IdPersona","=","persona.IdPersona")->join("recibo","recibo.IdMaestro","=","maestro.idmaestro")->join("tipo_de_pago","tipo_de_pago.idtipo_de_pago","=","recibo.idtipo_de_pago")->where(DB::raw("CONCAT(maestro.idmaestro,' ',persona.Primer_Nombre,' ',persona.Segundo_Nombre,' ',persona.Primer_Apellido,' ',persona.Segundo_Apellido,' ',tipo_de_pago.descripcion,' ',maestro.Estado)"),"Like","%".$id."%")->orderBy("maestro.idmaestro","DESC")->get();

    }

    public function updatedetalles(Request $request, $id){

       // $detalles=new Detalledelpedido();
         return $model = Detalledelpedido::select("*")->where("IdMaestro",$id)->join("insumos","insumos.IdInsumo","=","detalle-orden-sub,bor,ser.IdInsumos")->get();



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
