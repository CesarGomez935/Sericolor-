<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\insumos;
use app\Models\maestro;

class detalleimpresion extends Model
{
    use HasFactory;
    protected $table='detalle-orden-imp';
    protected $fillable='iddetalleordenimp';


    public function insumos(){
        return $this->belongsto(insumos::class,'idinsumo');
    }
    public function maestro(){

        return $this->belongsto(maestro::class,'idMaestro');

    }
}
