<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Error;
use Illuminate\Http\Request;
use Illuminate\Http\Cache;
use Illuminate\Support\Facades\Redirect;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        $categ['categoria']=Categoria::all()
        ->where('estatus','1');
        return view('categorias.index',$categ);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('categorias.create');
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
        $catadd= request()->except('_token');
        $dup=Categoria::where($catadd)->exists();
        
        if($dup){
            // Redireccionar al formulario
            return redirect()->back()->withErrors('error','El registro ya existe.');
        }else{
            Categoria::Insert($catadd);
            $categ['categoria']=Categoria::all();
            unset($catadd);
            return view('categorias.index',$categ);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $update['categoria']=Categoria::all()
        ->where('idc',$id)
        ->first();
        return view('categorias.edit',$update);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$idc)
    {
        //
        $update1=request()->except('_token','_method');
        Categoria::where('idc', $idc)->update($update1);
        $categ['categoria']=Categoria::all()
        ->where('estatus','1');
        return view('categorias.index',$categ);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Categoria::where('idc', $id)
        ->update(array('estatus' => 0));
        return redirect('categoria');
    }
}
