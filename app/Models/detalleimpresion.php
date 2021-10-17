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
    protected $primarykey='iddetalleordenimp';
    
    protected $fillable=['IdInsumos','IdMaestro','ancho','alto','mt2','p/m','costo','cantidad','total','observacion'];
    public $timestamps = false;


    public function insumos(){
        return $this->belongsto(insumos::class,'idinsumo');
    }
    public function maestro(){

        return $this->belongsto(maestro::class,'IdMaestro');

    }
}
