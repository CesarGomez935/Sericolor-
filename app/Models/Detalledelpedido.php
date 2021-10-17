<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use APP\Model\insumos;

class Detalledelpedido extends Model
{
    protected $table='detalle-orden-sub,bor,ser';
    protected $primarykey='iddetalleordensu';
    protected $fillable=['IdInsumos','IdMaestro','pecho_izquierdo','pecho_derecho','manga_izquierda','manga_derecha','espalda','cantidad','observacion'];
    public $timestamps = false;
    


    public function insumos(){
        return $this->belongsto(insumos::class,'idInsumos');
    }
    public function maestro(){

    return $this->belongsto(maestro::class,'IdMaestro');

    }
}
