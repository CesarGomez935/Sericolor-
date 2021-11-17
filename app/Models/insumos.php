<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class insumos extends Model
{
    use HasFactory;
    
    protected $table='insumos';
    protected $primaryKey='IdInsumo';
    protected $fillable=['Tipo','Descripcion','idcategoria'];
    
    public function detalle(){

        return $this->HasMany(detalleimpresion::class);
        return $this->HasMany(Detalledelpedido::class);
    }
    public function categoria(){

        return $this->belongsto(categoria::class);

    }



}