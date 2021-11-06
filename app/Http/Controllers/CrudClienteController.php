<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\persona;

class CrudClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
       // return $request->all();

       DB::transaction(function () use ($request) {

        $request->validate([

             'primer_nombre'=>'required',
             
             'telefono'=>'required',
             'correo'=>'required',
             'tipo_de_cliente'=>'required',
             
             
                

        ]);

         $persona=persona::create([

                'Primer_Nombre'=>$request->primer_nombre,
                'Segundo_Nombre'=>$request->segundo_nombre,
                'Primer_Apellido'=>$request->primer_apellido,
                'Segundo_Apellido'=>$request->segundo_apellido,
                'Cedula'=>$request->cedula,
                'Telefono'=>$request->telefono,
                'Correo'=>$request->correo,
                'Direccion'=>$request->direccion,
                
                

            ]);
            $cliente=cliente::create([


                'IdPersona'=>$persona->IdPersona,
                'TipoDeCliente'=>$request->tipo_de_cliente,
                'Cargo'=>$request->cargo,
                'RUC'=>$request->ruc,
                
                
                

            ]);
           
       });

       return redirect("/menu/menuadmon/clientes");
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

       $cliente= persona::where("Persona.IdPersona",$id)->join("cliente","persona.IdPersona","=","cliente.IdPersona")->firstOrFail();
       // $cliente= persona::where("persona.idpersona",$id)->join("cliente","cliente.IdPersona","=","cliente.IdPersona")->firstorfail();
         //$cliente=cliente::find($id);


       // return view("editarcliente",compact("cliente"));
       // return $cliente;

    //    $cliente= cliente::find($id);
    //    // $cliente=cliente::select("*")->where("IdCliente",$IdCliente)->join("persona","persona.IdPersona","=","cliente.IdPersona")->get();
        
    //     return view("editarcliente", compact("cliente"));
    //    // return $id;
        // return $cliente;
     return view("editarcliente", compact("cliente"));
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

        
        $IdPersona=$request->IdPersona;

      //  $cliente= persona::where("Persona.IdPersona",$id)->join("cliente","persona.IdPersona","=","cliente.IdPersona")->firstOrFail();
        $cliente=cliente::where("IdPersona",$id)->firstorfail();
        //return $request;

        $persona= persona::where("IdPersona",$id)->firstorfail();

       // return $cliente;
       

         
                //$persona->IdPersona=$request->IdPersona;
                $persona->Primer_Nombre=$request->primer_nombre;
                $persona->Segundo_Nombre=$request->segundo_nombre;
                $persona->Primer_Apellido=$request->primer_apellido;
                $persona->Segundo_Apellido=$request->segundo_apellido;
                $persona->Cedula=$request->cedula;
                $persona->Telefono=$request->telefono;
                $persona->Correo=$request->correo;
                $persona->Direccion=$request->direccion;

                $persona->save();
                
                

            


                $cliente-> IdPersona=$persona->IdPersona;
                $cliente-> TipoDeCliente=$request->tipo_de_cliente;
                $cliente-> Cargo=$request->cargo;
                $cliente-> RUC=$request->ruc;
                $cliente->save();
                
                
                

        
           
    

       return redirect("/menu/menuadmon/clientes");
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente=cliente::where("IdPersona",$id)->firstorfail();
        //return $request;

        $persona= persona::where("IdPersona",$id)->firstorfail();

        $cliente->delete();
        $persona->delete();

        return redirect("/menu/menuadmon/clientes");
    }
}
