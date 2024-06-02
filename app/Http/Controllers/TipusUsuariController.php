<?php

namespace App\Http\Controllers;

use App\Models\TipusUsuari;
use Illuminate\Http\Request;

class TipusUsuariController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipusUsuaris = TipusUsuari::all();
        return view('tipusUsuari.index', compact('tipusUsuaris'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuaris $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuaris $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuaris $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuaris $user)
    {
        //
    }
}
