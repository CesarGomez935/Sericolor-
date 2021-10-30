<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\insumos;
use App\Models\categoria;
use App\Models\detalleimpresion;
use App\Models\Detalledelpedido;
use App\Models\recibo;

 use Illuminate\Support\Facades\DB;
//use DB;
use App\Models\maestro;

class maestrocontrolador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
            return maestro::all();
            return Detalledelpedido::all();
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
                'Estado'=>$request->estado,

              

            ]);
                $detalle=json_decode($request->detalle);
                foreach($detalle as $fila){
                 
                $detalle=Detalledelpedido::create([                    
                    'IdInsumos'=>$fila->IdInsumos,
                    'IdMaestro'=>$maestro->idmaestro,                
                    'pecho_izquierdo'=>$fila->pecho_izq,
                    'pecho_derecho'=>$fila->pecho_der,
                    'manga_izquierda'=>$fila->manga_izq,
                    'manga_derecha'=>$fila-> manga_der,
                    'espalda'=>$fila-> espalda,  
                    'cantidad'=>$fila->cantidad,
                    'observacion'=>$fila->observacion,
                    'precio'=>$fila->precio,
                    'total'=>$fila->totaldetalle,
                  
                    
    
                ]);

            }
            
                
            
            

        });
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
         $model=new maestro();
        $model=maestro::find($id);
        return $model->delete();
    }
}