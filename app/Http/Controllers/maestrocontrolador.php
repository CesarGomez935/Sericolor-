<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cliente;
use App\Models\persona;
use App\Models\usuario;
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
     //  $edit= maestro::where("idcategoria",2)->join("detalle-orden-sub,bor,ser","detalle-orden-sub,bor,ser.IdMaestro","=","maestro.idmaestro")->join("cliente","cliente.IdPersona","=","maestro.IdCliente")->join("usuario","usuario.IdUsuario","=","maestro.IdUsuario")->join("persona","cliente.IdPersona","=","persona.IdPersona")->join("recibo","recibo.IdMaestro","=","maestro.idmaestro")->join("metodo_de_pago","metodo_de_pago.Id_Metodo_de_Pago","=","recibo.Id_Metodo_de_Pago")->join("persona as trabajador","usuario.IdPersona","=","trabajador.IdPersona")->select("maestro.*","recibo.*","metodo_de_pago.*", "cliente.*", "usuario.*", "trabajador.idpersona as trabajadorid", "trabajador.primer_nombre as trabajador_primer_nombre", "trabajador.segundo_nombre as trabajador_segundo_nombre", "trabajador.primer_apellido as trabajador_primer_apellido", "trabajador.segundo_apellido as trabajador_segundo_apellido", "persona.*")->firstorfail();
     //   $edit= maestro::all();
        

      // return view("EditarformSerigrafia",compact('edit'));
     //return ($edit);

   $edit= maestro::where("IdCategoria",2)->join("detalle-orden-sub,bor,ser","detalle-orden-sub,bor,ser.IdMaestro","=","maestro.idmaestro")
        ->join("cliente","cliente.IdCliente","=","maestro.IdCliente")
        ->join("usuario","usuario.IdUsuario","=","maestro.IdUsuario")
        ->join("persona","persona.IdPersona","=","cliente.IdPersona")
        ->join("persona as trabajador","trabajador.IdPersona","=","usuario.IdPersona")
        ->select("maestro.*","detalle-orden-sub,bor,ser.*", "cliente.*", "usuario.*", "trabajador.idpersona as trabajadorid", "trabajador.primer_nombre as trabajador_primer_nombre", "trabajador.segundo_nombre as trabajador_segundo_nombre", "trabajador.primer_apellido as trabajador_primer_apellido", "trabajador.segundo_apellido as trabajador_segundo_apellido", "persona.*")
        ->findOrFail($id);
      return view("EditarformSerigrafia",compact('edit'));



 //return ($edit);












        
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
        $IdPersona=$request->IdPersona;
        $usuario=usuario::where("IdUsuario",$id)->firstorfail();
        $persona= persona::where("IdPersona",$id)->firstorfail();
        $cliente=cliente::where("IdCliente",$id)->firstorfail();

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