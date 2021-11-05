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

    public static function getpedidossublimacion(){
        $records= maestro::where("maestro.IdCategoria",1)
        ->join("detalle-orden-sub,bor,ser","detalle-orden-sub,bor,ser.IdMaestro","=","maestro.idmaestro")
        ->join("cliente","cliente.IdCliente","=","maestro.IdCliente")
        ->join("usuario","usuario.IdUsuario","=","maestro.IdUsuario")
        ->join("persona","persona.IdPersona","=","cliente.IdPersona")
        ->join("persona as trabajador","trabajador.IdPersona","=","usuario.IdPersona")
        ->join("recibo","recibo.IdMaestro","=","maestro.idmaestro")
        ->join("categoria","categoria.idcategoria","=","maestro.IdCategoria")
        ->join("metodo_de_pago","metodo_de_pago.Id_Metodo_de_Pago","=","recibo.Id_Metodo_de_Pago")
        ->select( "maestro.*","detalle-orden-sub,bor,ser.*","categoria.descripcion","metodo_de_pago.Tipo_de_pago", "cliente.*", "usuario.IdUsuario","usuario.idpersona", "trabajador.idpersona as trabajadorid", "trabajador.primer_nombre as trabajador_primer_nombre", "trabajador.segundo_nombre as trabajador_segundo_nombre", "trabajador.primer_apellido as trabajador_primer_apellido", "trabajador.segundo_apellido as trabajador_segundo_apellido", "persona.*","recibo.*")
        ->get()
        ->toArray();
        
        return $records;
        //->join("detalle-orden-imp","detalle-orden-imp.IdMaestro","=","maestro.idmaestro")
    }

    public static function getpedidosbordado(){
        $records= maestro::where("maestro.IdCategoria",4)
        ->join("detalle-orden-sub,bor,ser","detalle-orden-sub,bor,ser.IdMaestro","=","maestro.idmaestro")
        ->join("cliente","cliente.IdCliente","=","maestro.IdCliente")
        ->join("usuario","usuario.IdUsuario","=","maestro.IdUsuario")
        ->join("persona","persona.IdPersona","=","cliente.IdPersona")
        ->join("persona as trabajador","trabajador.IdPersona","=","usuario.IdPersona")
        ->join("recibo","recibo.IdMaestro","=","maestro.idmaestro")
        ->join("categoria","categoria.idcategoria","=","maestro.IdCategoria")
        ->join("metodo_de_pago","metodo_de_pago.Id_Metodo_de_Pago","=","recibo.Id_Metodo_de_Pago")
        ->select( "maestro.*","detalle-orden-sub,bor,ser.*","categoria.descripcion","metodo_de_pago.Tipo_de_pago", "cliente.*", "usuario.IdUsuario","usuario.idpersona", "trabajador.idpersona as trabajadorid", "trabajador.primer_nombre as trabajador_primer_nombre", "trabajador.segundo_nombre as trabajador_segundo_nombre", "trabajador.primer_apellido as trabajador_primer_apellido", "trabajador.segundo_apellido as trabajador_segundo_apellido", "persona.*","recibo.*")
        ->get()
        ->toArray();
        
        return $records;
        //->join("detalle-orden-imp","detalle-orden-imp.IdMaestro","=","maestro.idmaestro")
    }
    public static function getpedidosserigrafia(){
        $records= maestro::where("maestro.IdCategoria",2)
        ->join("detalle-orden-sub,bor,ser","detalle-orden-sub,bor,ser.IdMaestro","=","maestro.idmaestro")
        ->join("cliente","cliente.IdCliente","=","maestro.IdCliente")
        ->join("usuario","usuario.IdUsuario","=","maestro.IdUsuario")
        ->join("persona","persona.IdPersona","=","cliente.IdPersona")
        ->join("persona as trabajador","trabajador.IdPersona","=","usuario.IdPersona")
        ->join("recibo","recibo.IdMaestro","=","maestro.idmaestro")
        ->join("categoria","categoria.idcategoria","=","maestro.IdCategoria")
        ->join("metodo_de_pago","metodo_de_pago.Id_Metodo_de_Pago","=","recibo.Id_Metodo_de_Pago")
        ->select( "maestro.*","detalle-orden-sub,bor,ser.*","categoria.descripcion","metodo_de_pago.Tipo_de_pago", "cliente.*", "usuario.IdUsuario","usuario.idpersona", "trabajador.idpersona as trabajadorid", "trabajador.primer_nombre as trabajador_primer_nombre", "trabajador.segundo_nombre as trabajador_segundo_nombre", "trabajador.primer_apellido as trabajador_primer_apellido", "trabajador.segundo_apellido as trabajador_segundo_apellido", "persona.*","recibo.*")
        ->get()
        ->toArray();
        
        return $records;
        //->join("detalle-orden-imp","detalle-orden-imp.IdMaestro","=","maestro.idmaestro")
    }
    public static function getpedidosimpresion(){
        $records= maestro::where("maestro.IdCategoria",3)
        ->join("detalle-orden-imp","detalle-orden-imp.IdMaestro","=","maestro.idmaestro")
        ->join("cliente","cliente.IdCliente","=","maestro.IdCliente")
        ->join("usuario","usuario.IdUsuario","=","maestro.IdUsuario")
        ->join("persona","persona.IdPersona","=","cliente.IdPersona")
        ->join("persona as trabajador","trabajador.IdPersona","=","usuario.IdPersona")
        ->join("recibo","recibo.IdMaestro","=","maestro.idmaestro")
        ->join("categoria","categoria.idcategoria","=","maestro.IdCategoria")
        ->join("metodo_de_pago","metodo_de_pago.Id_Metodo_de_Pago","=","recibo.Id_Metodo_de_Pago")
        ->select( "maestro.*","detalle-orden-imp.*","categoria.descripcion","metodo_de_pago.Tipo_de_pago", "cliente.*", "usuario.IdUsuario","usuario.idpersona", "trabajador.idpersona as trabajadorid", "trabajador.primer_nombre as trabajador_primer_nombre", "trabajador.segundo_nombre as trabajador_segundo_nombre", "trabajador.primer_apellido as trabajador_primer_apellido", "trabajador.segundo_apellido as trabajador_segundo_apellido", "persona.*","recibo.*")
        ->get()
        ->toArray();
        
        return $records;
        //->join("detalle-orden-imp","detalle-orden-imp.IdMaestro","=","maestro.idmaestro")
    }
}