<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CheckRoleController extends Controller
{
    //
    public function check(Request $request, array $roleRules, $auth)
    {
        $rules = $roleRules[$request->method()];
        if ($rules['auth']) {
            if ($auth == null){
                echo'La session ha expirado';
                die();
            }
        }
        if ($rules['allowed'] !== 'all') {
            $rol = $auth->Privilegios;
            if (!in_array($rol,explode(',', $rules['allowed']))){
                echo 'No poseees privilegios para ejecutar esto we: '.$rol;
                die();
            }
        }
    }
}
