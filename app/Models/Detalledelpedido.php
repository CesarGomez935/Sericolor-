<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalledelpedido extends Model
{
    protected $table='pedido';
    public $timestamps = false;
    public function pedido()
    {
      return $this->BelongsTo(pedidos::class, 'pedido','IDpedido');
    }

}
