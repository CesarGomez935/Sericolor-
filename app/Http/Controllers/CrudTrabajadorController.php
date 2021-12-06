<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\persona;
class CrudTrabajadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        

         DB::transaction(function () use ($request) {

            
            $request->validate([

             'primer_nombre'=>'required',
             'primer_apellido'=>'required',
             'telefono'=>'required',
             'correo'=>'required',
             'cedula'=>'required',
             'correo'=>'required', 
             'direccion'=>'required',

             'nombre_de_usuario'=>'required',
             'password'=>'required',
             'rol_asignado'=>'required',
                   
                

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
            $usuario=usuario::create([


                'idpersona'=>$persona->IdPersona,
                'Usuario'=>$request->nombre_de_usuario,
                'password'=>$request->password,
                'Privilegios'=>$request->privilegios,
                'RolAsignado'=>$request->rol_asignado,
                
                
                

            ]);
           
       });

       return redirect("/menu/menuadmon/personal");
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
        $trabajador= persona::where("Persona.IdPersona",$id)->join("usuario","persona.IdPersona","=","usuario.idpersona")->firstOrFail();
       // $cliente= persona::where("persona.idpersona",$id)->join("cliente","cliente.IdPersona","=","cliente.IdPersona")->firstorfail();
         //$cliente=cliente::find($id);


       // return view("editarcliente",compact("cliente"));
       // return $cliente;

    //    $cliente= cliente::find($id);
    //    // $cliente=cliente::select("*")->where("IdCliente",$IdCliente)->join("persona","persona.IdPersona","=","cliente.IdPersona")->get();
        
    //     return view("editarcliente", compact("cliente"));
    //    // return $id;
        // return $cliente;
     return view("editarpersonal", compact("trabajador"));
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
        $usuario=usuario::where("idpersona",$id)->firstorfail();
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
                
                

            


                $usuario-> idpersona=$persona->IdPersona;             
                
                $usuario-> Privilegios=$request->privilegios;
                 $usuario-> estado=$request->estado;
                $usuario-> RolAsignado=$request->rol_asignado;
                $usuario->save();
                
                
                

        
           
    

       return redirect("/menu/menuadmon/personal");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario=usuario::where("idpersona",$id)->firstorfail();
        //return $request;

        $persona= persona::where("IdPersona",$id)->firstorfail();

        $usuario->delete();
        $persona->delete();

        return redirect("/menu/menuadmon/personal");
    }
}