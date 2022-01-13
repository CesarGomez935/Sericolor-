<?php

namespace App\Http\Controllers;

use App\Models\insumos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class graficocontroller extends Controller
{
     public function index($fecha1,$fecha2)
    {

        $cant=[];

        $sublimacion=insumos::whereBetween('fecha', [$fecha1, $fecha2])
        ->where("detalle-orden-sub,bor,ser.IdCategoria",1)
        ->select("insumos.IdInsumo","insumos.descripcion","insumos.tipo",DB::raw("sum(total) as Total"),DB::raw("sum(Cantidad) as Cantidad"))
        ->join("detalle-orden-sub,bor,ser","insumos.IdInsumo","=","detalle-orden-sub,bor,ser.IdInsumos")
        ->join("maestro","detalle-orden-sub,bor,ser.IdMaestro","=","maestro.idmaestro")
        ->groupBy("insumos.descripcion")
        ->get();

        $cantsub=[];
        foreach($sublimacion as $sub)
        {
            $cantsub[]= ['name'=>[$sub['tipo'],$sub['descripcion']], 'y'=> floatval($sub['Cantidad'])];
            
        }

        $serigrafia=insumos::whereBetween('fecha', [$fecha1, $fecha2])
        ->where("detalle-orden-sub,bor,ser.IdCategoria",2)
        ->select("insumos.IdInsumo","insumos.descripcion","insumos.tipo",DB::raw("sum(total) as Total"),DB::raw("sum(Cantidad) as Cantidad"))
        ->join("detalle-orden-sub,bor,ser","insumos.IdInsumo","=","detalle-orden-sub,bor,ser.IdInsumos")
        ->join("maestro","detalle-orden-sub,bor,ser.IdMaestro","=","maestro.idmaestro")
        ->groupBy("insumos.descripcion")
        ->get();

        $cantser=[];
        foreach($serigrafia as $ser)
        {
            $cantser[]= ['name'=>[$ser['tipo'],$ser['descripcion']], 'y'=> floatval($ser['Cantidad'])];
        }

        $impresion=insumos::whereBetween('fecha', [$fecha1, $fecha2])
        ->where("detalle-orden-imp.IdCategoria",3)
        ->select("insumos.IdInsumo","insumos.descripcion","insumos.tipo",DB::raw("sum(total) as Total"),DB::raw("sum(cantidad) as Cantidad"))
        ->join("detalle-orden-imp","insumos.IdInsumo","=","detalle-orden-imp.IdInsumos")
        ->join("maestro","detalle-orden-imp.IdMaestro","=","maestro.idmaestro")
        ->groupBy("insumos.descripcion")
        ->get();

        $cantimp=[];
        foreach($impresion as $imp)
        {
            $cantimp[]= ['name'=>[$imp['tipo'],$imp['descripcion']], 'y'=> floatval($imp['Cantidad'])];
        }

        $bordado=insumos::whereBetween('fecha', [$fecha1, $fecha2])
        ->where("detalle-orden-sub,bor,ser.IdCategoria",4)
        ->select("insumos.IdInsumo","insumos.descripcion","insumos.tipo",DB::raw("sum(total) as Total"),DB::raw("sum(Cantidad) as Cantidad"))
        ->join("detalle-orden-sub,bor,ser","insumos.IdInsumo","=","detalle-orden-sub,bor,ser.IdInsumos")
        ->join("maestro","detalle-orden-sub,bor,ser.IdMaestro","=","maestro.idmaestro")
        ->groupBy("insumos.descripcion")
        ->get();

        $cantbor=[];
        foreach($bordado as $bor)
        {
            $cantbor[]= ['name'=>[$bor['tipo'],$bor['descripcion']], 'y'=> floatval($sub['Cantidad'])];
        }


        $cant = array_merge($cantsub,$cantbor,$cantimp,$cantser);
        

        //return compact("sublimacion","serigrafia","impresion","bordado");
        return view('reportes.Graficos', compact("fecha1","fecha2","cantsub"),["data"=> json_encode($cant)]);
    }
}
