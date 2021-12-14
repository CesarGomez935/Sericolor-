<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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
    public static function getclientes(){
        $records= persona::select("*")->join("cliente","cliente.IdPersona","=","persona.IdPersona")->get()->toArray();
        return $records;
    }
    public static function getusuarios(){
        $records= persona::select("persona.*","usuario.IdUsuario","usuario.Usuario","usuario.Privilegios","usuario.RolAsignado","usuario.estado")->join("usuario","usuario.IdPersona","=","persona.IdPersona")->get()->toArray();
        return $records;
    }
}
