<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trabajador extends Model
{
    protected $table='persona';
    protected $primaryKey='IDpersona';
    public $timestamps = false;


}
