<?php

namespace App\Http\Controllers;

use App\Models\Detalledelpedido;
use App\Models\detalleimpresion;
use Illuminate\Http\Request;
use App\Models\persona;
use App\Models\maestro;
use Barryvdh\DomPDF\Facade as PDF;

class ReportesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getpersonal()
    {
        $personal= persona::select("*")->join("usuario","usuario.IdPersona","=","persona.IdPersona")->get();
        return view('reportes.personal', compact('personal'));
    }

    public function createPDFpersonal() 
    {
      // retreive all records from db
      $data = persona::select("*")->join("usuario","usuario.IdPersona","=","persona.IdPersona")->get();;

      // share data to view
      view()->share('personal',$data);
      $pdf = PDF::loadView('reportes.personal', $data)->setPaper('letter', 'landscape');
      

      // download PDF file with download method
      return $pdf->download('Reporte Trabajadores.pdf');
    }

    public function getpedidosdiarios($fecha)
    {
        $pedidosdiarios= maestro::where("fecha",$fecha)->join("cliente","cliente.IdCliente","=","maestro.IdCliente")->join("persona","cliente.IdPersona","=","persona.IdPersona")->join("categoria","categoria.IdCategoria","=","maestro.IdCategoria")->orderBy("idmaestro","DESC")->get();
        $suma=maestro::where("fecha",$fecha)->sum("total_costo");
        return view('reportes.pedidosDiarios', compact('pedidosdiarios','suma','fecha'));
    }

    public function createPDFpedidosdiarios($fecha) 
    {
      // retreive all records from db
      $pedidosdiarios= maestro::where("fecha",$fecha)->join("cliente","cliente.IdCliente","=","maestro.IdCliente")->join("persona","cliente.IdPersona","=","persona.IdPersona")->join("categoria","categoria.IdCategoria","=","maestro.IdCategoria")->orderBy("idmaestro","DESC")->get();
        $suma=maestro::where("fecha",$fecha)->sum("total_costo");
      

      // share data to view
      view()->share('pedidosdiarios',compact('pedidosdiarios','suma','fecha'));
      $pdf = PDF::loadView('reportes.pedidosDiarios',compact('pedidosdiarios','suma','fecha'))->setPaper('letter', 'portrait');
      

      // download PDF file with download method
      return $pdf->stream('Reporte pedidos diarios ~fecha~.pdf');
    }


     public function getfacturaSub($id)
    {
        $maestro= maestro::where("maestro.idmaestro",$id)
        ->join("cliente","cliente.IdCliente","=","maestro.IdCliente")
        ->join("usuario","usuario.IdUsuario","=","maestro.IdUsuario")
        ->join("persona","persona.IdPersona","=","cliente.IdPersona")        
        ->join("persona as trabajador","trabajador.IdPersona","=","usuario.IdPersona")
        ->join("recibo","recibo.Idmaestro","=","maestro.idmaestro")
        ->select("recibo.Id_Metodo_de_Pago","recibo.Fecha_de_pago","recibo.Cod_Recibo","maestro.*", "cliente.*", "usuario.*", "trabajador.idpersona as trabajadorid", "trabajador.primer_nombre as trabajador_primer_nombre", "trabajador.segundo_nombre as trabajador_segundo_nombre", "trabajador.primer_apellido as trabajador_primer_apellido", "trabajador.segundo_apellido as trabajador_segundo_apellido", "persona.*")
        ->get();

        $detalle=Detalledelpedido::select("*")->where("IdMaestro",$id)->join("insumos","insumos.IdInsumo","=","detalle-orden-sub,bor,ser.IdInsumos")->get();
        
        //return compact("maestro","detalle");
        return view('reportes.factura', compact("maestro","detalle"));
    }

    public function createPDFfacturaSub($id) 
    {
      // retreive all records from db
       $maestro= maestro::where("maestro.idmaestro",$id)
        ->join("cliente","cliente.IdCliente","=","maestro.IdCliente")
        ->join("usuario","usuario.IdUsuario","=","maestro.IdUsuario")
        ->join("persona","persona.IdPersona","=","cliente.IdPersona")        
        ->join("persona as trabajador","trabajador.IdPersona","=","usuario.IdPersona")
        ->join("recibo","recibo.Idmaestro","=","maestro.idmaestro")
        ->select("recibo.Id_Metodo_de_Pago","recibo.Fecha_de_pago","recibo.Cod_Recibo","maestro.*", "cliente.*", "usuario.*", "trabajador.idpersona as trabajadorid", "trabajador.primer_nombre as trabajador_primer_nombre", "trabajador.segundo_nombre as trabajador_segundo_nombre", "trabajador.primer_apellido as trabajador_primer_apellido", "trabajador.segundo_apellido as trabajador_segundo_apellido", "persona.*")
        ->get();

        $detalle=Detalledelpedido::select("*")->where("IdMaestro",$id)->join("insumos","insumos.IdInsumo","=","detalle-orden-sub,bor,ser.IdInsumos")->get();
        

      // share data to view
      view()->share('maestro',compact('maestro','detalle',));
      $pdf = PDF::loadView('reportes.factura',compact('maestro','detalle'))->setPaper('letter', 'portrait');
      

      // download PDF file with download method
      return $pdf->stream('Factura.pdf');
    }

     public function getfacturaImp($id)
    {
        $maestro= maestro::where("maestro.idmaestro",$id)
        ->join("cliente","cliente.IdCliente","=","maestro.IdCliente")
        ->join("usuario","usuario.IdUsuario","=","maestro.IdUsuario")
        ->join("persona","persona.IdPersona","=","cliente.IdPersona")        
        ->join("persona as trabajador","trabajador.IdPersona","=","usuario.IdPersona")
        ->join("recibo","recibo.Idmaestro","=","maestro.idmaestro")
        ->select("recibo.Id_Metodo_de_Pago","recibo.Fecha_de_pago","recibo.Cod_Recibo","maestro.*", "cliente.*", "usuario.*", "trabajador.idpersona as trabajadorid", "trabajador.primer_nombre as trabajador_primer_nombre", "trabajador.segundo_nombre as trabajador_segundo_nombre", "trabajador.primer_apellido as trabajador_primer_apellido", "trabajador.segundo_apellido as trabajador_segundo_apellido", "persona.*")
        ->get();

        $detalle=detalleimpresion::select("*")->where("IdMaestro",$id)->get();
        
        //return compact("maestro","detalle");
        return view('reportes.facturaImp', compact("maestro","detalle"));
    }

    public function createPDFfacturaImp($id) 
    {
      // retreive all records from db
       $maestro= maestro::where("maestro.idmaestro",$id)
        ->join("cliente","cliente.IdCliente","=","maestro.IdCliente")
        ->join("usuario","usuario.IdUsuario","=","maestro.IdUsuario")
        ->join("persona","persona.IdPersona","=","cliente.IdPersona")        
        ->join("persona as trabajador","trabajador.IdPersona","=","usuario.IdPersona")
        ->join("recibo","recibo.Idmaestro","=","maestro.idmaestro")
        ->select("recibo.Id_Metodo_de_Pago","recibo.Fecha_de_pago","recibo.Cod_Recibo","maestro.*", "cliente.*", "usuario.*", "trabajador.idpersona as trabajadorid", "trabajador.primer_nombre as trabajador_primer_nombre", "trabajador.segundo_nombre as trabajador_segundo_nombre", "trabajador.primer_apellido as trabajador_primer_apellido", "trabajador.segundo_apellido as trabajador_segundo_apellido", "persona.*")
        ->get();

        $detalle=detalleimpresion::select("*")->where("IdMaestro",$id)->get();

      // share data to view
      view()->share('maestro',compact('maestro','detalle',));
      $pdf = PDF::loadView('reportes.facturaImp',compact('maestro','detalle'))->setPaper('letter', 'portrait');
      

      // download PDF file with download method
      return $pdf->stream('Factura.pdf');
    }

    public function getpedidosrango($fecha1,$fecha2)
    {
        $pedidosrango= maestro::whereBetween('fecha', [$fecha1, $fecha2])->join("cliente","cliente.IdCliente","=","maestro.IdCliente")->join("persona","cliente.IdPersona","=","persona.IdPersona")->join("categoria","categoria.IdCategoria","=","maestro.IdCategoria")->orderBy("idmaestro","DESC")->get();
        $suma=maestro::whereBetween('fecha', [$fecha1, $fecha2])->sum("total_costo");
        //return compact('pedidosdiarios','suma','fecha1','fecha2');
        return view('reportes.pedidosrangodefecha', compact('pedidosrango','suma','fecha1','fecha2'));
    }

    public function createPDFpedidosrango($fecha1,$fecha2) 
    {
      // retreive all records from db
      $pedidosrango= maestro::whereBetween('fecha', [$fecha1, $fecha2])->join("cliente","cliente.IdCliente","=","maestro.IdCliente")->join("persona","cliente.IdPersona","=","persona.IdPersona")->join("categoria","categoria.IdCategoria","=","maestro.IdCategoria")->orderBy("idmaestro","DESC")->get();
        $suma=maestro::whereBetween('fecha', [$fecha1, $fecha2])->sum("total_costo");
      

      // share data to view
      view()->share('pedidosrango',compact('pedidosrango','suma','fecha1','fecha2'));
      $pdf = PDF::loadView('reportes.pedidosrangodefecha',compact('pedidosrango','suma','fecha1','fecha2'))->setPaper('letter', 'portrait');
      

      // download PDF file with download method
      return $pdf->stream('Reporte pedidos Rango de fecha $fecha1 - $fecha2.pdf');
    }


     public function getinsumos()
    {
        $consulta=maestro::select("*")->join("detalle-orden-sub,bor,ser","detalle-orden-sub,bor,ser.IdMaestro","=","maestro.idmaestro")->join("insumos","insumos.IdInsumo","=","detalle-orden-sub,bor,ser.IdInsumos")->groupBy("insumos.descripcion")->get();

               
        return compact("maestro");
        //return view('reportes.factura', compact("maestro","detalle"));
    }

    // public function createPDFinsumos($fecha1,$fecha2) 
    // {
    //   // retreive all records from db
    //    $maestro= maestro::where("maestro.idmaestro",$id)
    //     ->join("cliente","cliente.IdCliente","=","maestro.IdCliente")
    //     ->join("usuario","usuario.IdUsuario","=","maestro.IdUsuario")
    //     ->join("persona","persona.IdPersona","=","cliente.IdPersona")        
    //     ->join("persona as trabajador","trabajador.IdPersona","=","usuario.IdPersona")
    //     ->join("recibo","recibo.Idmaestro","=","maestro.idmaestro")
    //     ->select("recibo.Id_Metodo_de_Pago","recibo.Fecha_de_pago","recibo.Cod_Recibo","maestro.*", "cliente.*", "usuario.*", "trabajador.idpersona as trabajadorid", "trabajador.primer_nombre as trabajador_primer_nombre", "trabajador.segundo_nombre as trabajador_segundo_nombre", "trabajador.primer_apellido as trabajador_primer_apellido", "trabajador.segundo_apellido as trabajador_segundo_apellido", "persona.*")
    //     ->get();

    //     $detalle=Detalledelpedido::select("*")->where("IdMaestro",$id)->join("insumos","insumos.IdInsumo","=","detalle-orden-sub,bor,ser.IdInsumos")->get();
        

    //   // share data to view
    //   view()->share('maestro',compact('maestro','detalle',));
    //   $pdf = PDF::loadView('reportes.factura',compact('maestro','detalle'))->setPaper('letter', 'portrait');
      

    //   // download PDF file with download method
    //   return $pdf->stream('Factura.pdf');
    // }

}