<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\ForeignKeyDefinition;


class pedidos extends Model
{
    protected $table='pedido';
    protected $primarykey='IDpedido';
    public $timestamps = false;
    

}
