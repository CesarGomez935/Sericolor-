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

         $usuarioexistente=DB::table('usuario')->where('Usuario',$usuario)->where('estado',1)->first();

        

           if(!empty($usuarioexistente)){

            $passwordesencriptada = deCrypt($usuarioexistente->password);

            
            if($password == $passwordesencriptada){

              dd($usuarioexistente);

             }else{
               dd("No existe este usuario");
             }

          }

        
    }
}