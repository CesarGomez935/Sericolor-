<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\insumos;
use Illuminate\Support\Facades\DB;

class insumocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return insumos::select("*")->join("categoria","insumos.idcategoria","=","categoria.idcategoria")->orderBy("IdInsumo","ASC")->get();
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

        $model=new insumos();
        $model->Tipo=$request->input('Tipo');
        $model->Descripcion=$request->input('Descripcion');
        $model->idcategoria=$request->input('idcategoria');
        return $model->save();







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
           $model=new insumos();
            $model=insumos::find($id);
        $model->Tipo=$request->input('Tipo1');
        $model->Descripcion=$request->input('Descripcion1');
        $model->idcategoria=$request->input('idcategoria1');
        return $model->save();

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
        $model=new insumos();
        $model=insumos::find($id);
        return $model->delete();

    }

    public function getinsumobusqueda($id)
    {
     
         return insumos::select("*")->join("categoria","insumos.idcategoria","=","categoria.idcategoria")->where(DB::raw("CONCAT(IdInsumo,' ',Tipo,' ',insumos.Descripcion,'',categoria.descripcion)"),"LIKE",'%'.$id.'%')->orderBy("IdInsumo","ASC")->get();

    }
    public function getinsumoimpdigital(){
        


        return insumos::select("*")->where("idcategoria",3)->get();


    }
}