<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\loginrequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class logincontroller extends Controller
{
    //
    public function index(){

        return view('iniciodesesion');

        
    }

    public function validarcredenciales(Request $request)
    {
    
         $usuario=$request->input('usuario');
         $password=$request->input('password');
         $recuerdame=$request->input('recuerdame');
         $respuesta=[];

         $usuarioexistente=DB::table('usuario')->where('Usuario',$usuario)->where('estado',1)->first();

        

           if(!empty($usuarioexistente)){
              $passwordesencriptada = deCrypt($usuarioexistente->password);
                          
            if($password == $passwordesencriptada){

             $respuesta["error"]=false;
             $respuesta["mensaje"]="usuario autenticado";
             $respuesta["usuario"]=$usuarioexistente;

           auth()->loginUsingId($usuarioexistente->IdUsuario,$recuerdame);

             }else{
                  $respuesta["error"]=true;
                  $respuesta["mensaje"]="contraseña incorrecta";
             }

          }
          else{
             $respuesta["error"]=true;
             $respuesta["mensaje"]="Este usuario no existe";

          }

        return response()->json($respuesta);
    }
}