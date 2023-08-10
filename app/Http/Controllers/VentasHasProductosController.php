<?php

namespace App\Http\Controllers;

use App\Models\ventas_has_productos;
use Illuminate\Http\Request;

class VentasHasProductosController extends Controller
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
     * @param  \App\Models\ventas_has_productos  $ventas_has_productos
     * @return \Illuminate\Http\Response
     */
    public function show(ventas_has_productos $ventas_has_productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ventas_has_productos  $ventas_has_productos
     * @return \Illuminate\Http\Response
     */
    public function edit(ventas_has_productos $ventas_has_productos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ventas_has_productos  $ventas_has_productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ventas_has_productos $ventas_has_productos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ventas_has_productos  $ventas_has_productos
     * @return \Illuminate\Http\Response
     */
    public function destroy(ventas_has_productos $ventas_has_productos)
    {
        //
    }
}
