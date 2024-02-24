<?php

namespace App\Http\Controllers;

use App\Models\funciona;
use App\Http\Requests\StorefuncionaRequest;
use App\Http\Requests\UpdatefuncionaRequest;

class FuncionaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("funcionas.funciona");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorefuncionaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(funciona $funciona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(funciona $funciona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatefuncionaRequest $request, funciona $funciona)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(funciona $funciona)
    {
        //
    }
}
