<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class maestro extends Model
{
    
    protected $table='maestro';
    protected $primaryKey='idmaestro';
    protected $fillable=['IdCategoria','IdCliente','IdUsuario','fecha','Notas','total_costo','saldo','CodSeguimiento','abono','Estado'];
    public $timestamps = false;
    public function categoria(){

        return $this->belongsto(categoria::class,'IdCategoria');
    }
    public function cliente(){

        return $this->belongsto(cliente::class,'IdCliente');
    }
    public function usuario(){

        return $this->belongsto(usuario::class,'IdUsuario');
    }
    public function detalleimpresion(){

        return $this->hasMany(detalleimpresion::class,'IdMaestro');
    }
    public function Detalledelpedido(){

        return $this->hasMany(Detalledelpedido::class,'IdMaestro');
    }
}