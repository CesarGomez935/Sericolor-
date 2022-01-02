<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catalogo extends Model
{
    use HasFactory;
    protected $table='catalogo';
    protected $primaryKey='idcatalogo';
    protected $fillable=['pdf','descripcion','telefono','correo'];
    public $timestamps = false;
}
