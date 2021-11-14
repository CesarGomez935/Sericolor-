<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\persona;
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
        $personal= persona::select("*")->join("cliente","cliente.IdPersona","=","persona.IdPersona")->get();
        return view('reportes.personal', compact('personal'));
    }

    public function createPDFpersonal() 
    {
      // retreive all records from db
      $data = persona::select("*")->join("cliente","cliente.IdPersona","=","persona.IdPersona")->get();;

      // share data to view
      view()->share('personal',$data);
      $pdf = PDF::loadView('reportes.personal', $data);

      // download PDF file with download method
      return $pdf->download('pdf_file.pdf');
    }
}
