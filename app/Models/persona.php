<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    use HasFactory;
    protected $table='persona';
    protected $fillable=['Rol','Primer_nombre','Segundo_nombre','Primer_apellido','Segundo_apellido','cedula','Telefono','Correo','Direccion'];
    public function cliente(){

        return $this->HasMany(cliente::class);
    }
    public function usuario(){

        return $this->HasMany(usuario::class);
    }
}
