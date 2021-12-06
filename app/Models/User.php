<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
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