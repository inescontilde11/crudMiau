<?php

namespace App\Http\Controllers;

use App\Models\Tienda;
use App\Http\Requests\StoreTiendaRequest;
use App\Http\Requests\UpdateTiendaRequest;

class TiendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fabricante = Tienda::all();
        return view("fabricante.listado", ["fabricante"=>$fabricante]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("fabricante.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTiendaRequest $request)
    {
        $datos = $request->input();
        $shop = new Tienda($datos);
        info("Tienda".$shop);
        $shop->save();
        $fabricante = Tienda::all();
        return view("fabricante.listado", ["fabricante" => $fabricante]);

    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $shop = Tienda::find($id);
        return view("fabricante.edit", ["unFabricante"=>$shop]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tienda $shop)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTiendaRequest $request, int $id)
    {
        $shop = Tienda::find($id);
        $shop->update($request->input());
        $fabricante = Tienda::all();
        return view("fabricante.listado", ["fabricante"=>$fabricante]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $shop = Tienda::find($id);
        $shop->delete();
        $fabricante = Tienda::all();
        return view("fabricante.listado", ["fabricante"=>$fabricante]);
    }
}
