<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\registro;
use App\Models\persona;
use App\Models\usuario;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class usuariocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return usuario::all();
        //  return persona::all();
        // return usuario::all();
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
     

        // $contrasena=$request->input('Contrasena');
        // $contrasenencriptada= new usuario();
        // $contrasenencriptada->password=encrypt($contrasena);

        DB::transaction(function() use ($request)
        {
            $request->validate([

             'primer_nombre'=>'required',
             'primer_apellido'=>'required',
             'telefono'=>'required',
             'correo'=>'required',
             'cedula'=>'required',
             'correo'=>'required|unique:persona,Correo',
             'direccion'=>'required',

             'usuario'=>'required|max:255|unique:usuario,Usuario',
             'Contrasena'=>'required',
             'RolAsignado'=>'required',
                   
                

            ]);

            $persona=persona::create([

                'Primer_Nombre'=>$request->primer_nombre,
                'Segundo_Nombre'=>$request->segundo_nombre,
                'Primer_Apellido'=>$request->primer_apellido,
                'Segundo_Apellido'=>$request->segundo_apellido,
                'Cedula'=>$request->cedula,
                'Telefono'=>$request->telefono,
                'Direccion'=>$request->direccion,
                'Correo'=>$request->correo,
                

            ]);
                
                 
                $usuario=usuario::create([                    
                    'idpersona'=>$persona->IdPersona,                
                    'Usuario'=>$request->usuario,             
                   'password'=>encrypt($request->Contrasena),                   
                    'Privilegios'=>"Dependiente",  
                    'RolAsignado'=>$request->RolAsignado,
                    'estado'=>0,
                    //  $contrasena=$request->input('Contrasena'),
                    //    $contrasenencriptada->password=encrypt($contrasena),
                    // //  $contrasenencriptada= new usuario(),
                    // // $contrasenencriptada->password=encrypt($contrasena),
                              
                ]);

            
            
                
            return redirect()->route('login.index');
            

        });
        return response()->json(["Mensaje"=>"Usuario Creado Satisfactoriamente"]);
       
          
      
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