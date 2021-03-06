<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    use HasFactory;
    protected $table='usuario';
    protected $primaryKey='IdUsuario';
    protected $fillable=['idpersona','Usuario','password','remember_token','Privilegios','RolAsignado','estado'];
     public $timestamps = false;

    public function persona(){


        return $this->belongsto(persona::class,'IdPersona');
    }
    public function maestro(){

        return $this->HasMany(maestro::class);
    }
}