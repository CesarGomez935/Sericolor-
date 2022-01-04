<?php

namespace App\Http\Controllers;

use App\Models\Detalledelpedido;
use App\Models\detalleimpresion;
use App\Models\insumos;
use Illuminate\Http\Request;
use App\Models\persona;
use App\Models\maestro;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;

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
        $pedidosdiarios= maestro::select("maestro.*","cliente.*","persona.*")->where('fecha', $fecha)->join("cliente","cliente.IdCliente","=","maestro.IdCliente")->join("persona","cliente.IdPersona","=","persona.IdPersona")->orderBy("idmaestro","DESC")->get();
        $suma=maestro::where("fecha",$fecha)->select(DB::raw("sum(total_costo) as Total"),DB::raw("sum(abono) as Total_Abono"),DB::raw("sum(saldo) as Total_Saldo"))->get();
        return view('reportes.pedidosDiarios', compact('pedidosdiarios','suma','fecha'));
    }

    public function createPDFpedidosdiarios($fecha)
    {
      // retreive all records from db
      $pedidosdiarios= maestro::select("maestro.*","cliente.*","persona.*")->where('fecha', $fecha)->join("cliente","cliente.IdCliente","=","maestro.IdCliente")->join("persona","cliente.IdPersona","=","persona.IdPersona")->orderBy("idmaestro","DESC")->get();
        $suma=maestro::where("fecha",$fecha)->select(DB::raw("sum(total_costo) as Total"),DB::raw("sum(abono) as Total_Abono"),DB::raw("sum(saldo) as Total_Saldo"))->get();


      // share data to view
      view()->share('pedidosdiarios',compact('pedidosdiarios','suma','fecha'));
      $pdf = PDF::loadView('reportes.pedidosDiarios',compact('pedidosdiarios','suma','fecha'))->setPaper('letter', 'portrait');


      // download PDF file with download method
      return $pdf->stream("Reporte pedidos diarios $$fecha.pdf");
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
        $detalleimp=detalleimpresion::select("*")->where("IdMaestro",$id)->join("insumos","insumos.IdInsumo","=","detalle-orden-imp.IdInsumos")->get();

        //return compact("maestro","detalle");
        return view('reportes.factura', compact("maestro","detalle","detalleimp"));
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
        $detalleimp=detalleimpresion::select("*")->where("IdMaestro",$id)->join("insumos","insumos.IdInsumo","=","detalle-orden-imp.IdInsumos")->get();


      // share data to view
      view()->share('maestro',compact('maestro','detalle','detalleimp'));
      $pdf = PDF::loadView('reportes.factura',compact('maestro','detalle','detalleimp'))->setPaper('letter', 'portrait');


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

        $detalle=detalleimpresion::select("*")->where("IdMaestro",$id)->join("insumos","insumos.IdInsumo","=","detalle-orden-imp.IdInsumos")->get();

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

        $detalle=detalleimpresion::select("*")->where("IdMaestro",$id)->join("insumos","insumos.IdInsumo","=","detalle-orden-imp.IdInsumos")->get();

      // share data to view
      view()->share('maestro',compact('maestro','detalle',));
      $pdf = PDF::loadView('reportes.facturaImp',compact('maestro','detalle'))->setPaper('letter', 'portrait');


      // download PDF file with download method
      return $pdf->stream('Factura.pdf');
    }

    public function getpedidosrango($fecha1,$fecha2)
    {
        $pedidosrango= maestro::select("maestro.*","cliente.*","persona.*")->whereBetween('fecha', [$fecha1, $fecha2])->join("cliente","cliente.IdCliente","=","maestro.IdCliente")->join("persona","cliente.IdPersona","=","persona.IdPersona")->orderBy("idmaestro","DESC")->get();
        $suma=maestro::whereBetween('fecha', [$fecha1, $fecha2])->select(DB::raw("sum(total_costo) as Total"),DB::raw("sum(abono) as Abono"),DB::raw("sum(saldo) as Saldo"))->get();
        //return compact('pedidosdiarios','suma','fecha1','fecha2');
        return view('reportes.pedidosrangodefecha', compact('pedidosrango','suma','fecha1','fecha2'));
    }

    public function createPDFpedidosrango($fecha1,$fecha2)
    {
      // retreive all records from db
       $pedidosrango= maestro::select("maestro.*","cliente.*","persona.*")->whereBetween('fecha', [$fecha1, $fecha2])->join("cliente","cliente.IdCliente","=","maestro.IdCliente")->join("persona","cliente.IdPersona","=","persona.IdPersona")->orderBy("idmaestro","DESC")->get();
        $suma=maestro::whereBetween('fecha', [$fecha1, $fecha2])->select(DB::raw("sum(total_costo) as Total"),DB::raw("sum(abono) as Abono"),DB::raw("sum(saldo) as Saldo"))->get();


      // share data to view
      view()->share('pedidosrango',compact('pedidosrango','suma','fecha1','fecha2'));
      $pdf = PDF::loadView('reportes.pedidosrangodefecha',compact('pedidosrango','suma','fecha1','fecha2'))->setPaper('letter', 'portrait');


      // download PDF file with download method
      return $pdf->stream("Reporte pedidos Rango de fecha $fecha1 y $fecha2.pdf");
    }


    public function getinsumosrango($fecha1,$fecha2)
    {
        $sublimacion=insumos::whereBetween('fecha', [$fecha1, $fecha2])
        ->where("detalle-orden-sub,bor,ser.IdCategoria",1)
        ->select("insumos.IdInsumo","insumos.descripcion","insumos.tipo",DB::raw("sum(total) as Total"),DB::raw("sum(Cantidad) as Cantidad"))
        ->join("detalle-orden-sub,bor,ser","insumos.IdInsumo","=","detalle-orden-sub,bor,ser.IdInsumos")
        ->join("maestro","detalle-orden-sub,bor,ser.IdMaestro","=","maestro.idmaestro")
        ->groupBy("insumos.descripcion")
        ->get();

        $serigrafia=insumos::whereBetween('fecha', [$fecha1, $fecha2])
        ->where("detalle-orden-sub,bor,ser.IdCategoria",2)
        ->select("insumos.IdInsumo","insumos.descripcion","insumos.tipo",DB::raw("sum(total) as Total"),DB::raw("sum(Cantidad) as Cantidad"))
        ->join("detalle-orden-sub,bor,ser","insumos.IdInsumo","=","detalle-orden-sub,bor,ser.IdInsumos")
        ->join("maestro","detalle-orden-sub,bor,ser.IdMaestro","=","maestro.idmaestro")
        ->groupBy("insumos.descripcion")
        ->get();

        $impresion=insumos::whereBetween('fecha', [$fecha1, $fecha2])
        ->where("detalle-orden-imp.IdCategoria",3)
        ->select("insumos.IdInsumo","insumos.descripcion","insumos.tipo",DB::raw("sum(total) as Total"),DB::raw("sum(cantidad) as Cantidad"))
        ->join("detalle-orden-imp","insumos.IdInsumo","=","detalle-orden-imp.IdInsumos")
        ->join("maestro","detalle-orden-imp.IdMaestro","=","maestro.idmaestro")
        ->groupBy("insumos.descripcion")
        ->get();

        $bordado=insumos::whereBetween('fecha', [$fecha1, $fecha2])
        ->where("detalle-orden-sub,bor,ser.IdCategoria",4)
        ->select("insumos.IdInsumo","insumos.descripcion","insumos.tipo",DB::raw("sum(total) as Total"),DB::raw("sum(Cantidad) as Cantidad"))
        ->join("detalle-orden-sub,bor,ser","insumos.IdInsumo","=","detalle-orden-sub,bor,ser.IdInsumos")
        ->join("maestro","detalle-orden-sub,bor,ser.IdMaestro","=","maestro.idmaestro")
        ->groupBy("insumos.descripcion")
        ->get();
        //return compact("sublimacion","serigrafia","impresion","bordado");
        return view('reportes.insumosrangodefecha', compact("sublimacion","serigrafia","impresion","bordado","fecha1","fecha2"));
    }

    public function createPDFinsumos($fecha1,$fecha2)
    {
      // retreive all records from db
      $sublimacion=insumos::whereBetween('fecha', [$fecha1, $fecha2])
        ->where("detalle-orden-sub,bor,ser.IdCategoria",1)
        ->select("insumos.IdInsumo","insumos.descripcion","insumos.tipo",DB::raw("sum(total) as Total"),DB::raw("sum(Cantidad) as Cantidad"))
        ->join("detalle-orden-sub,bor,ser","insumos.IdInsumo","=","detalle-orden-sub,bor,ser.IdInsumos")
        ->join("maestro","detalle-orden-sub,bor,ser.IdMaestro","=","maestro.idmaestro")
        ->groupBy("insumos.descripcion")
        ->get();

        $serigrafia=insumos::whereBetween('fecha', [$fecha1, $fecha2])
        ->where("detalle-orden-sub,bor,ser.IdCategoria",2)
        ->select("insumos.IdInsumo","insumos.descripcion","insumos.tipo",DB::raw("sum(total) as Total"),DB::raw("sum(Cantidad) as Cantidad"))
        ->join("detalle-orden-sub,bor,ser","insumos.IdInsumo","=","detalle-orden-sub,bor,ser.IdInsumos")
        ->join("maestro","detalle-orden-sub,bor,ser.IdMaestro","=","maestro.idmaestro")
        ->groupBy("insumos.descripcion")
        ->get();

        $impresion=insumos::whereBetween('fecha', [$fecha1, $fecha2])
        ->where("detalle-orden-imp.IdCategoria",3)
        ->select("insumos.IdInsumo","insumos.descripcion","insumos.tipo",DB::raw("sum(total) as Total"),DB::raw("sum(cantidad) as Cantidad"))
        ->join("detalle-orden-imp","insumos.IdInsumo","=","detalle-orden-imp.IdInsumos")
        ->join("maestro","detalle-orden-imp.IdMaestro","=","maestro.idmaestro")
        ->groupBy("insumos.descripcion")
        ->get();

        $bordado=insumos::whereBetween('fecha', [$fecha1, $fecha2])
        ->where("detalle-orden-sub,bor,ser.IdCategoria",4)
        ->select("insumos.IdInsumo","insumos.descripcion","insumos.tipo",DB::raw("sum(total) as Total"),DB::raw("sum(Cantidad) as Cantidad"))
        ->join("detalle-orden-sub,bor,ser","insumos.IdInsumo","=","detalle-orden-sub,bor,ser.IdInsumos")
        ->join("maestro","detalle-orden-sub,bor,ser.IdMaestro","=","maestro.idmaestro")
        ->groupBy("insumos.descripcion")
        ->get();


      // share data to view
      view()->share( compact("sublimacion","serigrafia","impresion","bordado","fecha1","fecha2"));
      $pdf = PDF::loadView('reportes.insumosrangodefecha', compact("sublimacion","serigrafia","impresion","bordado","fecha1","fecha2"))->setPaper('letter', 'landscape');


      // download PDF file with download method
      return $pdf->stream("Ventas de todos los insumos entre: $fecha1 y $fecha2.pdf");
    }

    public function getinsumosrangoidsub($idinsumo,$fecha1,$fecha2)
    {
        $detalle=insumos::whereBetween('fecha', [$fecha1, $fecha2])
        ->where("detalle-orden-sub,bor,ser.IdInsumos",$idinsumo)
        ->select("insumos.IdInsumo","insumos.descripcion","insumos.tipo",DB::raw("sum(total) as Total"),DB::raw("sum(Cantidad) as Cantidad"))
        ->join("detalle-orden-sub,bor,ser","insumos.IdInsumo","=","detalle-orden-sub,bor,ser.IdInsumos")
        ->join("maestro","detalle-orden-sub,bor,ser.IdMaestro","=","maestro.idmaestro")
        ->groupBy("insumos.descripcion")
        ->get();

         $detalle2=insumos::whereBetween('fecha', [$fecha1, $fecha2])
        ->where("detalle-orden-imp.IdInsumos",$idinsumo)
        ->select("insumos.IdInsumo","insumos.descripcion","insumos.tipo",DB::raw("sum(total) as Total"),DB::raw("sum(cantidad) as Cantidad"))
        ->join("detalle-orden-imp","insumos.IdInsumo","=","detalle-orden-imp.IdInsumos")
        ->join("maestro","detalle-orden-imp.IdMaestro","=","maestro.idmaestro")
        ->groupBy("insumos.descripcion")
        ->get();




        //return compact("detalle","fecha1","fecha2");
        return view('reportes.insumosidrangodefecha', compact("detalle","detalle2","fecha1","fecha2"));
    }

    public function createPDFinsumosrangoidsub($idinsumo,$fecha1,$fecha2)
    {
      // retreive all records from db
      $detalle=insumos::whereBetween('fecha', [$fecha1, $fecha2])
        ->where("detalle-orden-sub,bor,ser.IdInsumos",$idinsumo)
        ->select("insumos.IdInsumo","insumos.descripcion","insumos.tipo",DB::raw("sum(total) as Total"),DB::raw("sum(Cantidad) as Cantidad"))
        ->join("detalle-orden-sub,bor,ser","insumos.IdInsumo","=","detalle-orden-sub,bor,ser.IdInsumos")
        ->join("maestro","detalle-orden-sub,bor,ser.IdMaestro","=","maestro.idmaestro")
        ->groupBy("insumos.descripcion")
        ->get();

        $detalle2=insumos::whereBetween('fecha', [$fecha1, $fecha2])
        ->where("detalle-orden-imp.IdInsumos",$idinsumo)
        ->select("insumos.IdInsumo","insumos.descripcion","insumos.tipo",DB::raw("sum(total) as Total"),DB::raw("sum(cantidad) as Cantidad"))
        ->join("detalle-orden-imp","insumos.IdInsumo","=","detalle-orden-imp.IdInsumos")
        ->join("maestro","detalle-orden-imp.IdMaestro","=","maestro.idmaestro")
        ->groupBy("insumos.descripcion")
        ->get();


      // share data to view
      view()->share( compact("detalle","detalle2","fecha1","fecha2"));
      $pdf = PDF::loadView('reportes.insumosidrangodefecha', compact("detalle","detalle2","fecha1","fecha2"))->setPaper('letter', 'landscape');


      // download PDF file with download method
      return $pdf->stream("ventas de insmos entre: $fecha1 y $fecha2.pdf");
    }

    public function getinsumosrangoidimp($idinsumo,$fecha1,$fecha2)
    {
         $detalle=insumos::whereBetween('fecha', [$fecha1, $fecha2])
        ->where("detalle-orden-imp.IdInsumos",$idinsumo)
        ->select("insumos.IdInsumo","insumos.descripcion","insumos.tipo",DB::raw("sum(total) as Total"),DB::raw("sum(cantidad) as Cantidad"))
        ->join("detalle-orden-imp","insumos.IdInsumo","=","detalle-orden-imp.IdInsumos")
        ->join("maestro","detalle-orden-imp.IdMaestro","=","maestro.idmaestro")
        ->groupBy("insumos.descripcion")
        ->get();


        //return compact("detalle","fecha1","fecha2");
        return view('reportes.insumosidrangodefecha', compact("detalle","fecha1","fecha2"));
    }

    public function createPDFinsumosrangoidimp($idinsumo,$fecha1,$fecha2)
    {
      // retreive all records from db
      $detalle=insumos::whereBetween('fecha', [$fecha1, $fecha2])
        ->where("detalle-orden-imp.IdInsumos",$idinsumo)
        ->select("insumos.IdInsumo","insumos.descripcion","insumos.tipo",DB::raw("sum(total) as Total"),DB::raw("sum(cantidad) as Cantidad"))
        ->join("detalle-orden-imp","insumos.IdInsumo","=","detalle-orden-imp.IdInsumos")
        ->join("maestro","detalle-orden-imp.IdMaestro","=","maestro.idmaestro")
        ->groupBy("insumos.descripcion")
        ->get();


      // share data to view
      view()->share( compact("detalle","fecha1","fecha2"));
      $pdf = PDF::loadView('reportes.insumosidrangodefecha', compact("detalle","fecha1","fecha2"))->setPaper('letter', 'landscape');


      // download PDF file with download method
      return $pdf->stream("ventas de insumos entre: $fecha1 y $fecha2.pdf");
    }

    public function getpedidosrangoTipodepago($tipodepago,$fecha1,$fecha2)
    {
        $pedidosrango= maestro::select("maestro.*","cliente.*","persona.*","recibo.*","tipo_de_pago.*")->join("recibo","recibo.IdMaestro","=","maestro.idmaestro")->whereBetween('fecha', [$fecha1, $fecha2])->where('recibo.idtipo_de_pago',$tipodepago)->join("cliente","cliente.IdCliente","=","maestro.IdCliente")->join("persona","cliente.IdPersona","=","persona.IdPersona")->join("tipo_de_pago","recibo.idtipo_de_pago","=","tipo_de_pago.idtipo_de_pago")->orderBy("maestro.idmaestro","DESC")->get();
        $suma=maestro::join("recibo","recibo.IdMaestro","=","maestro.idmaestro")->whereBetween('fecha', [$fecha1, $fecha2])->where('idtipo_de_pago',$tipodepago)->select(DB::raw("sum(total_costo) as Total"),DB::raw("sum(abono) as Abono"),DB::raw("sum(saldo) as Saldo"))->get();
        //return compact('pedidosdiarios','suma','fecha1','fecha2');
        return view('reportes.pedidosrangodefechaTipodepago', compact('pedidosrango','suma','fecha1','fecha2'));
    }

    public function createPDFpedidosrangoTipodepago($tipodepago,$fecha1,$fecha2)
    {
      // retreive all records from db
      $pedidosrango= maestro::select("maestro.*","cliente.*","persona.*","recibo.*","tipo_de_pago.*")->join("recibo","recibo.IdMaestro","=","maestro.idmaestro")->whereBetween('fecha', [$fecha1, $fecha2])->where('recibo.idtipo_de_pago',$tipodepago)->join("cliente","cliente.IdCliente","=","maestro.IdCliente")->join("persona","cliente.IdPersona","=","persona.IdPersona")->join("tipo_de_pago","recibo.idtipo_de_pago","=","tipo_de_pago.idtipo_de_pago")->orderBy("maestro.idmaestro","DESC")->get();
      $suma=maestro::join("recibo","recibo.IdMaestro","=","maestro.idmaestro")->whereBetween('fecha', [$fecha1, $fecha2])->where('idtipo_de_pago',$tipodepago)->select(DB::raw("sum(total_costo) as Total"),DB::raw("sum(abono) as Abono"),DB::raw("sum(saldo) as Saldo"))->get();


      // share data to view
      view()->share('pedidosrango',compact('pedidosrango','suma','fecha1','fecha2'));
      $pdf = PDF::loadView('reportes.pedidosrangodefechaTipodepago',compact('pedidosrango','suma','fecha1','fecha2'))->setPaper('letter', 'landscape');


      // download PDF file with download method
      return $pdf->stream("Reporte pedidos Rango de fecha $fecha1 y $fecha2.pdf");
    }

    public function getpedidoscliente($id,$fecha1,$fecha2){

      $pedidosrango= maestro::select("maestro.*","cliente.*","persona.*")->join("recibo","recibo.IdMaestro","=","maestro.idmaestro")->whereBetween('fecha', [$fecha1, $fecha2])->join("cliente","cliente.IdCliente","=","maestro.IdCliente")->join("persona","cliente.IdPersona","=","persona.IdPersona")->where('maestro.IdCliente',$id)->orderBy("idmaestro","DESC")->get();
        $suma=maestro::join("recibo","recibo.IdMaestro","=","maestro.idmaestro")->whereBetween('fecha', [$fecha1, $fecha2])->where('maestro.IdCliente',$id)->where('maestro.IdCliente',$id)->select(DB::raw("sum(total_costo) as Total"),DB::raw("sum(abono) as Abono"),DB::raw("sum(saldo) as Saldo"))->get();
        $nombre= maestro::select("cliente.*","persona.*")->whereBetween('fecha', [$fecha1, $fecha2])->join("cliente","cliente.IdCliente","=","maestro.IdCliente")->join("persona","cliente.IdPersona","=","persona.IdPersona")->where('maestro.IdCliente',$id)->groupBy("IdCliente")->get();
        //return $nombre;
        //return compact('pedidosrango','suma','fecha1','fecha2');
        return view('reportes.rangodefechacliente', compact('pedidosrango','suma','fecha1','fecha2','nombre'));

    }

     public function createPDFpedidoscliente($id,$fecha1,$fecha2)
    {
      // retreive all records from db
        $pedidosrango= maestro::select("maestro.*","cliente.*","persona.*")->join("recibo","recibo.IdMaestro","=","maestro.idmaestro")->whereBetween('fecha', [$fecha1, $fecha2])->join("cliente","cliente.IdCliente","=","maestro.IdCliente")->join("persona","cliente.IdPersona","=","persona.IdPersona")->where('maestro.IdCliente',$id)->orderBy("idmaestro","DESC")->get();
        $suma=maestro::join("recibo","recibo.IdMaestro","=","maestro.idmaestro")->whereBetween('fecha', [$fecha1, $fecha2])->where('maestro.IdCliente',$id)->where('maestro.IdCliente',$id)->select(DB::raw("sum(total_costo) as Total"),DB::raw("sum(abono) as Abono"),DB::raw("sum(saldo) as Saldo"))->get();
        $nombre= maestro::select("cliente.*","persona.*")->whereBetween('fecha', [$fecha1, $fecha2])->join("cliente","cliente.IdCliente","=","maestro.IdCliente")->join("persona","cliente.IdPersona","=","persona.IdPersona")->where('maestro.IdCliente',$id)->groupBy("IdCliente")->get();


      // share data to view
      view()->share('pedidosrango',compact('pedidosrango','suma','fecha1','fecha2','nombre'));
      $pdf = PDF::loadView('reportes.rangodefechacliente',compact('pedidosrango','suma','fecha1','fecha2','nombre'))->setPaper('letter', 'landscape');


      // download PDF file with download method
      return $pdf->stream("Reporte pedidos por: $nombre Rango de fecha: $fecha1 y $fecha2.pdf");
    }

}
