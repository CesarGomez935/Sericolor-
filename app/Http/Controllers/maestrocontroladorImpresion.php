<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\insumos;
use App\Models\categoria;
use App\Models\detalleimpresion;
use App\Models\Detalledelpedido;
use App\Models\recibo;
use App\Models\metodo_de_pago;
use Illuminate\Support\Facades\DB;
//use DB;
use App\Models\maestro;

class maestrocontroladorImpresion extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return maestro::all();
        return categoria::all();
        return recibo::all();
        return metodo_de_pago::all();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        DB::transaction(function() use ($request)
        {

            $request->validate([


             'IdCliente'=>'required',
             'IdUsuario'=>'required',
             'fecha'=>'required',
             'total_costo'=>'required',
             'Saldo'=>'required',
             'codseguimiento'=>'required',
             'abono'=>'required',
             'estado'=>'required',

             'idmetodo'=>'required',
             'fecha'=>'required',
             

            ]);


            $maestro=Maestro::create([


                'IdCliente'=>$request->IdCliente,
                'IdUsuario'=>$request->IdUsuario,
                'fecha'=>$request->fecha,
                'Notas'=>$request->notas,
                'total_costo'=>$request->total_costo,
                'saldo'=>$request->Saldo,
                'CodSeguimiento'=>$request->codseguimiento,
                'abono'=>$request->abono,
                'Estado'=>$request->estado,


            ]);
                $detalleimp=json_decode($request->detalleimp);
             foreach($detalleimp as $fila){

                $detalleimp=detalleimpresion::create([
                    'IdInsumos'=>$fila->IdInsumos,
                    'IdMaestro'=>$maestro->idmaestro,
                    'IdCategoria'=>$fila->IdCategoria,
                    'ancho'=>$fila->ancho,
                    'alto'=>$fila->alto,
                    'mt2'=>$fila->mt2,
                    'p_m'=>$fila-> p_m,
                    'costo'=>$fila-> costo,
                    'cantidad'=>$fila->cantidad,
                    'total'=>$fila->total,
                    'observacion'=>$fila->observacion,

                ]);

            }

                $recibo=recibo::create([

                    'IdMaestro'=>$maestro->idmaestro,
                    'Id_Metodo_de_Pago'=>$request->idmetodo,
                    'Fecha_de_pago'=>$request->fecha,
                    'Cod_Recibo'=>$request->cod,
                    'idtipo_de_pago'=>$request->tipodepago,


                ]);



        });
    }

    // public function insertarDetalle($maestro,$detalle)
    // {
    //     foreach($detalles as $detalle)
    //     {
    //         $maestro->detalles()->insert(
    //             [

    //             'IdInsumos'=>$detalle->IdInsumos,
    //             'IdMaestro'=>$maestro->id,
    //             'ancho'=>$detalle->ancho,
    //             'alto'=>$detalle->alto,
    //             'mt2'=>$detalle->mt2,
    //             'p_m'=>$detalle-> p_m,
    //             'costo'=>$detalle-> costo,
    //             'cantidad'=>$detalle->cantidad,
    //             'total'=>$detalle->total,
    //             'observacion'=>$detalle->observacion,
    //             ]
    //             );
    //     }

    // }

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
         $edit= maestro::where("IdCategoria",3)->join("detalle-orden-sub,bor,ser","detalle-orden-sub,bor,ser.IdMaestro","=","maestro.idmaestro")
        ->join("cliente","cliente.IdCliente","=","maestro.IdCliente")
        ->join("usuario","usuario.IdUsuario","=","maestro.IdUsuario")
        ->join("persona","persona.IdPersona","=","cliente.IdPersona")
        ->join("persona as trabajador","trabajador.IdPersona","=","usuario.IdPersona")
        ->join("recibo","recibo.Idmaestro","=","maestro.idmaestro")
        ->select("recibo.*","maestro.*","detalle-orden-sub,bor,ser.*", "cliente.*", "usuario.*", "trabajador.idpersona as trabajadorid", "trabajador.primer_nombre as trabajador_primer_nombre", "trabajador.segundo_nombre as trabajador_segundo_nombre", "trabajador.primer_apellido as trabajador_primer_apellido", "trabajador.segundo_apellido as trabajador_segundo_apellido", "persona.*")
        ->findOrFail($id);
         //return view("EditarformImpresion",compact('edit'));
         return $edit;

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
           $model1=new maestro();
         $model1=maestro::find($id);

         $model1->IdCliente =$request->input('IdCliente');
         $model1->IdUsuario=$request->input('IdUsuario');
         $model1->fecha=$request->input('fecha');
         $model1->Notas=$request->input('notas');
         $model1->saldo=$request->input('Saldo');
         $model1->CodSeguimiento=$request->input('codseguimiento');

         $model1->abono=$request->input('abono');
        $model1->Estado=$request->input('estado');
         $model1->total_costo=$request->input('total_costo');
        return $model1->save();
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
    public function getpedidosimpresion()
    {

    return maestro::select("*")->join("detalle-orden-imp","detalle-orden-imp.cantidad","=","maestro.idmaestro")->get();

    }
}
