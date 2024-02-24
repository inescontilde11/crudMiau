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
        $miau = new Miau($datos);
        $miau->save();
        $miaus = Miau::all();
        return view("productos.miau",compact("miaus"));
    }

    /**
     * Display the specified resource.
     */
    public function show(Miau $miau)
    {
        //
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
    public function update(UpdateMiauRequest $request, Miau $miau)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Miau $miau)
    {
        //
    }
}
