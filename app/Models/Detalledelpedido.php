<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use APP\Model\insumos;

class Detalledelpedido extends Model
{
    protected $table='detalle-orden-sub,bor,ser';
    protected $fillable='iddetalleordensu';


    public function insumos(){
        return $this->belongsto(insumos::class,'idInsumos');
    }
    public function maestro(){

    return $this->belongsto(maestro::class,'idmaestro');

    }
}
