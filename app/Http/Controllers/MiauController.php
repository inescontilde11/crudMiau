<?php

namespace App\Http\Controllers;

use App\Models\Miau;
use App\Http\Requests\StoreMiauRequest;
use App\Http\Requests\UpdateMiauRequest;

class MiauController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Miau::all();

        return view("productos.producto", compact("productos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("productos.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMiauRequest $request)
    {
        $datos = $request->input();
        $producto = new Miau($datos);
        $producto->save();
        $productos = Miau::all();
        return view("productos.producto",compact("productos"));
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $producto = Miau::find($id);
        return view("productos.edit", compact("producto"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Miau $miau)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMiauRequest $request, int $id)
    {
        $producto = Miau::find($id);
        $producto->update($request->input());
        $productos = Miau::all();
        return view("productos.producto", compact("productos"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $producto = Miau::find($id);
        $producto->delete();
        $productos = Miau::all();
        return view("productos.producto", compact("productos"));
    }
}
