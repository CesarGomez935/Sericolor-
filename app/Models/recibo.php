<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recibo extends Model
{
    use HasFactory;
    protected $table='recibo';
    protected $primaryKey='IdMaestro';
    protected $fillable=['IdMaestro','Id_Metodo_de_Pago','Fecha_de_pago','Cod_Recibo','idtipo_de_pago'];
    public $timestamps = false;

    public function maestro(){

        return $this->belongsto(maestro::class,'IdMaestro');
    }
    public function metodo_pago(){

        return $this->belongsto(metodo_pago::class,'Id_metodo_de_pago');
    }
}