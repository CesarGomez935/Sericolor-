<?php

namespace App\Http\Controllers;

use App\Models\catalogo;
use Illuminate\Http\Request;
use App\Models\promocion;
use App\Models\servicios;
use App\Models\slider;
use Illuminate\Support\Facades\File;

class promocioncontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios=servicios::all();
        $promocion= promocion::all();
        $slider= slider::all();
        $catalogo=catalogo::all();
        // return promocion::all();
        return view("promociones",compact("promocion","slider","servicios","catalogo"));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("promocionesadd");
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




            $promocion=new promocion();
       // $promocion->imagen=$request->input("imagen");
            if($request->hasFile("imagen")){

            $file=$request->file("imagen");
            $extention=$file->getClientOriginalExtension();
            $filename= time().".".$extention;
            $file->move("uploads/promocion/",$filename);
            $promocion->imagen=$filename;

        }
            $promocion->descripcion=$request->input("descripcion");
            $promocion->save();
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
        $promocion=promocion::find($id);
        return view("promocionesedit",compact("promocion"));
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
        $promocion=promocion::find($id);
        if($request->hasFile("imagen")){

            $destination="uploads/promocion/". $promocion->imagen;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file=$request->file("imagen");
            $extention=$file->getClientOriginalExtension();
            $filename= time().".".$extention;
            $file->move("uploads/promocion/",$filename);
            $promocion->imagen=$filename;

        }
        $promocion->descripcion=$request->input("descripcion");
        $promocion->update();
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
        $promocion=promocion::find($id);
        $destination="uploads/promocion/".$promocion->imagen;
        if(File::exists($destination)){
            file::delete($destination);
        }
        $promocion->delete();
        return redirect("/menu/menuadmon/promociones");
    }
}
