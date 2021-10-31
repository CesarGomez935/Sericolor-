<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class maestro extends Model
{
    
    protected $table='maestro';
    protected $primaryKey='idmaestro';
    protected $fillable=['IdCategoria','IdCliente','IdUsuario','fecha','Notas','total_costo','saldo','CodSeguimiento','abono','Estado'];
    public $timestamps = false;
    public function categoria(){

        return $this->belongsto(categoria::class,'IdCategoria');
    }
    public function cliente(){

        return $this->belongsto(cliente::class,'IdCliente');
    }
    public function usuario(){

        return $this->belongsto(usuario::class,'IdUsuario');
    }
    public function detalleimpresion(){

        return $this->hasMany(detalleimpresion::class,'IdMaestro');
    }
    public function Detalledelpedido(){

        return $this->hasMany(Detalledelpedido::class,'IdMaestro');
    }

    public static function getpedidos(){
        $records= maestro::select("*")
        ->join("detalle-orden-sub,bor,ser","detalle-orden-sub,bor,ser.IdMaestro","=","maestro.idmaestro")
        ->join("detalle-orden-imp","detalle-orden-imp.IdMaestro","=","maestro.idmaestro")
        ->join("cliente","cliente.IdPersona","=","maestro.IdCliente")
        ->join("persona","cliente.IdPersona","=","persona.IdPersona")
        ->join("insumos","detalle-orden-sub,bor,ser.IdInsumos","=","insumos.IdInsumo")
        ->join("categoria","maestro.IdCategoria","=","categoria.idcategoria")
        ->join("recibo","maestro.idmaestro","=","recibo.IdMaestro")
        ->join("metodo_de_pago","recibo.Id_Metodo_de_Pago","=","metodo_de_pago.Id_Metodo_de_Pago")
        ->get()->toArray();
        return $records;
    }
}