<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    use HasFactory;
    protected $table='persona';
    protected $fillable='idpersona';
    public function cliente(){

        return $this->HasMany(cliente::class);
    }
    public function usuario(){

        return $this->HasMany(usuario::class);
    }
}
