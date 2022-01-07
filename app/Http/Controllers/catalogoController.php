<?php

namespace App\Http\Controllers;

use App\Models\catalogo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class catalogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $catalogo=catalogo::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("catalogocreate");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'pdf'=>'required',
            'telefono'=>'required',
            'correo'=>'required',

           ]);




           $catalogo=new catalogo();
      // $catalogo->pdf=$request->input("pdf");
           if($request->hasFile("pdf")){

           $file=$request->file("pdf");
           $extention=$file->getClientOriginalExtension();
           $filename= time()."PDF.".$extention;
           $file->move("uploads/catalogo/",$filename);
           $catalogo->pdf=$filename;

       }
           $catalogo->descripcion=$request->input("descripcion");
           $catalogo->telefono=$request->input("telefono");
           $catalogo->correo=$request->input("correo");
           $catalogo->cita=$request->input("cita");
           $catalogo->versiculo=$request->input("versiculo");
           $catalogo->save();
           return redirect("/menu/menuadmon/promociones");
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
        $catalogo=catalogo::find($id);
        return view("catalogoedit",compact("catalogo"));
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
        $catalogo=catalogo::find($id);
        if($request->hasFile("pdf")){

            $destination="uploads/catalogo/". $catalogo->pdf;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file=$request->file("pdf");
            $extention=$file->getClientOriginalExtension();
            $filename= time()."PDF.".$extention;
            $file->move("uploads/catalogo/",$filename);
            $catalogo->pdf=$filename;

        }

        $catalogo->descripcion=$request->input("descripcion");
        $catalogo->telefono=$request->input("telefono");
        $catalogo->correo=$request->input("correo");
        $catalogo->cita=$request->input("cita");
        $catalogo->versiculo=$request->input("versiculo");
        $catalogo->update();
        return redirect("/menu/menuadmon/promociones");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $catalogo=catalogo::find($id);
        $destination="uploads/catalogo/".$catalogo->pdf;
        if(File::exists($destination)){
            file::delete($destination);
        }
        $catalogo->delete();
        return redirect("/menu/menuadmon/promociones");
    }
}
