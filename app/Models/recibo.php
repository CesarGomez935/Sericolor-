<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recibo extends Model
{
    use HasFactory;
    protected $table='recibo';

    public function maestro(){

        return $this->belongsto(maestro::class,'IdMaestro');
    }
}
