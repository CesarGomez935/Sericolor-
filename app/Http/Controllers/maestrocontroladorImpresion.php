<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\insumos;
use App\Models\categoria;
use App\Models\detalleimpresion;
use App\Models\Detalledelpedido;
use App\Models\recibo;

use DB;
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

            $maestro=Maestro::create([

                'IdCategoria'=>$request->IdCategoria,
                'IdCliente'=>$request->IdCliente,
                'IdUsuario'=>$request->IdUsuario,
                'fecha'=>$request->fecha,
                'Notas'=>$request->notas,
                'total_costo'=>$request->total_costo,
                'saldo'=>$request->Saldo,
                'CodSeguimiento'=>$request->codseguimiento,
                'abono'=>$request->abono,
              

            ]);

            // foreach($request as $requests){

                
    
               // $maestro=Maestro::find($maestro->idmaestro);
    
                
              
                
                $detalle=detalleimpresion::create([
    
                    
                    'IdInsumos'=>$request->IdInsumos,
                    'IdMaestro'=>$maestro->idmaestro,                
                    'ancho'=>$request->ancho,
                    'alto'=>$request->alto,
                    'mt2'=>$request->mt2,
                    'p/m'=>$request-> p_m,
                    'costo'=>$request-> costo,  
                    'cantidad'=>$request->cantidad,
                    'total'=>$request->total,
                    'observacion'=>$request->observacion,
    
                ]);
                $recibo=recibo::create([

                    'IdMaestro'=>$maestro->idmaestro,  
                    'Id_Metodo_de_Pago'=>$request->idmetodo,
                    'Fecha_de_pago'=>$request->fecha,
                    'Cod-Recibo'=>$request->codseguimiento,


                ]);

            // }
            
            

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
    //             'p/m'=>$detalle-> p_m,
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
