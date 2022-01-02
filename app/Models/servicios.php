<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class servicios extends Model
{
    protected $table='servicios';
    protected $primaryKey='IdServicio';
    protected $fillable=['titulo','descripcion','imagen','imagenrep'];
    public $timestamps = false;
}
