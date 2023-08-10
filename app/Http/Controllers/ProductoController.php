<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class ProductoController extends Controller
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
        $datos['productos']=Producto::join("categorias", "categorias.idc", "=", "productos.id_categorias")
        ->where('productos.estatus','1')
        ->paginate(5);
        return view('productos.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categ['categoria']=Categoria::all();
        return view('productos.create',$categ);
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
        $datosproductos= request()->except('_token');
        if(request()->hasFile('imagen')){
            $datosproductos['imagen']=$request->file('imagen')->store('uploads','public');
        }
        Producto::Insert($datosproductos);
        $datos['productos']=Producto::join("categorias", "categorias.idc", "=", "productos.id_categorias")
        ->where('productos.estatus','1')
        ->paginate(5);
        return view('productos.index',$datos);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($idp)
    {
        //
        $product['categoria']=Categoria::all();
        $product['productos'] = Producto::where('idp', $idp)->first();
        return view('productos.update',$product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idp)
    {
        //
        $update =request()->except('_token','_method');
        if(request()->hasFile('imagen')){
            $update['imagen']=$request->file('imagen')->store('uploads','public');
        }
        Producto::where('idp', $idp)->update($update);
        $datos['productos']=Producto::join("categorias", "categorias.idc", "=", "productos.id_categorias")
        ->where('productos.estatus','1')
        ->paginate(5);
        return view('productos.index',$datos);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Producto::where('idp', $id)
        ->update(array('estatus' => 0));
        return redirect('productos');
    }
}
