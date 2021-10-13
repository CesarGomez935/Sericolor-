<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class maestro extends Model
{
    use HasFactory;
    protected $table='maestro';
    protected $fillable='idmaestro';
    public function categoria(){

        return $this->belongsto(categoria::class,'idcategoria');
    }
    public function cliente(){

        return $this->belongsto(cliente::class,'idCliente');
    }
    public function usuario(){

        return $this->belongsto(usuario::class,'idUsuario');
    }
}
