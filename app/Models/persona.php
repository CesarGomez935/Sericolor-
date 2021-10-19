<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    use HasFactory;
    protected $table='persona';
    protected $primaryKey='IdPersona';
    protected $fillable=['Primer_Nombre','Segundo_Nombre','Primer_Apellido','Segundo_Apellido','Cedula','Telefono','Correo','Direccion'];
    public $timestamps = false;
    public function cliente(){

        return $this->HasMany(cliente::class);
    }
    public function usuario(){

        return $this->HasMany(usuario::class);
    }
}