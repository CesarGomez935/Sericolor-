<?php

namespace App\Http\Controllers;

use App\Models\servicios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios= servicios::all();

        // return servicios::all();
        return view("serviciosshow",compact("servicios"));
    }

    public function showall()
    {
       return $servicios= servicios::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("servicioscreate");
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

            'imagen'=>'required',
            'descripcion'=>'required',
           ]);




           $servicios=new servicios();
      // $servicios->imagen=$request->input("imagen");
           if($request->hasFile("imagen")){

           $file=$request->file("imagen");
           $extention=$file->getClientOriginalExtension();
           $filename= time().".".$extention;
           $file->move("uploads/servicios/",$filename);
           $servicios->imagen=$filename;

       }
       if($request->hasFile("imagenrep")){

        $file=$request->file("imagenrep");
        $extention=$file->getClientOriginalExtension();
        $filename= time()."rep.".$extention;
        $file->move("uploads/servicios/",$filename);
        $servicios->imagenrep=$filename;

    }
            $servicios->titulo=$request->input("titulo");
            $servicios->descripcion=$request->input("descripcion");
            $servicios->save();
           return redirect("/menu/menuadmon/servicios");







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
        $servicios=servicios::find($id);
        return view("serviciosedit",compact("servicios"));
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
        $servicios=servicios::find($id);
        if($request->hasFile("imagen")){

            $destination="uploads/servicios/". $servicios->imagen;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file=$request->file("imagen");
            $extention=$file->getClientOriginalExtension();
            $filename= time().".".$extention;
            $file->move("uploads/servicios/",$filename);
            $servicios->imagen=$filename;

        }
        if($request->hasFile("imagenrep")){

            $destination="uploads/servicios/". $servicios->imagen;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file=$request->file("imagenrep");
            $extention=$file->getClientOriginalExtension();
            $filename= time()."rep.".$extention;
            $file->move("uploads/servicios/",$filename);
            $servicios->imagenrep=$filename;

        }
        $servicios->titulo=$request->input("titulo");
        $servicios->descripcion=$request->input("descripcion");
        $servicios->update();
        return redirect("/menu/menuadmon/servicios");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servicios=servicios::find($id);
        $destination="uploads/servicios/".$servicios->imagen;
        if(File::exists($destination)){
            file::delete($destination);
        }
        $servicios->delete();
        return redirect("/menu/menuadmon/servicios");
    }
}
