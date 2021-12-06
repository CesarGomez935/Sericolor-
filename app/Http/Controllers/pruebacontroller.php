<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class pruebacontroller extends Controller
{
    //
    public function index(){

        $usuario= User::find(auth()->user()->IdUsuario);
      return view('menu')->with(compact('usuario'));
        
    }
}