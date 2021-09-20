<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\ForeignKeyDefinition;


class pedidos extends Model
{
    protected $table='categoria';
    protected $primarykey='idcategoria';
    public $timestamps = false;
   public function Detalledelpedido()
  {
    return $this->HasMany(Detalledelpedido::class, 'pedido','IDpedido');
  }
}
