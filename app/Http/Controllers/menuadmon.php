<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class menuadmon extends Controller
{
    //
    public function index(){
        $usuario= User::find(auth()->user()->IdUsuario);
        return view('menuadministracion')->with(compact('usuario'));
    }


}