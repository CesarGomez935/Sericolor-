<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class insumos extends Model
{
    use HasFactory;
    
    protected $table='insumos';
    protected $fillable='IdInsumo';
    
    public function detalle(){

        return $this->HasMany(detalleimpresion::class);
        return $this->HasMany(Detalledelpedido::class);
    }



}
