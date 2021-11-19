<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    use HasFactory;
    protected $table='slider';
    protected $primaryKey='Idslider';
    protected $fillable=['Imagen','descripcion'];
    public $timestamps = false;
}