<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class metodo_de_pago extends Model
{
    use HasFactory;
    protected $table='metodo_de_pago';
    protected $fillable='Id_Metodo_de_Pago';
    
    public function maestro(){

        return $this->HasMany(maestro::class);
    }
}
