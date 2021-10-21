<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;
    protected $table='cliente';
    protected $primaryKey="IdCliente";
    protected $fillable=['IdPersona',"TipoDeCliente","Cargo","RUC"];
    public $timestamps = false;


    public function persona(){


        return $this->belongsto(persona::class,'idpersona');
    }

    public function maestro(){

        return $this->HasMany(maestro::class);
    }



}
