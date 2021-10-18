<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class promocion extends Model
{
 
    use HasFactory;
    protected $table='promocion';
    protected $primaryKey='IdPromocion';
    protected $fillable=['Imagen','descripcion'];
    public $timestamps = false;
}
