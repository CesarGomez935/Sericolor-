<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slider;
use Illuminate\Support\Facades\File;

class SliderPrincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     return slider::all();   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("SliderPrincipaladd");
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




            $slider=new slider();
       // $slider->imagen=$request->input("imagen");
            if($request->hasFile("imagen")){

            $file=$request->file("imagen");
            $extention=$file->getClientOriginalExtension();
            $filename= time().".".$extention;
            $file->move("uploads/slider/",$filename);
            $slider->imagen=$filename;

        }
            $slider->descripcion=$request->input("descripcion");
            $slider->save();
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
        $slider=slider::find($id);
        return view("SliderPrincipaledit",compact("slider"));
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
        $slider=slider::find($id);
        if($request->hasFile("imagen")){

            $destination="uploads/slider/". $slider->imagen;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file=$request->file("imagen");
            $extention=$file->getClientOriginalExtension();
            $filename= time().".".$extention;
            $file->move("uploads/slider/",$filename);
            $slider->imagen=$filename;

        }
        $slider->descripcion=$request->input("descripcion");
        $slider->update();
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
        $slider=slider::find($id);
        $destination="uploads/slider/".$slider->imagen;
        if(File::exists($destination)){
            file::delete($destination);
        }
        $slider->delete();
        return redirect("/menu/menuadmon/promociones");
    }
}
