<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $table='persona';
    protected $primarykey='IDpersona';
    protected $secondarykey='Rol';
    
}
