<?php

namespace App\Http\Controllers;

use App\Models\Usuaris;
use Illuminate\Http\Request;

class UsuariController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuaris = Usuaris::all();
        $usuaris = Usuaris::paginate(10);

        return view('usuaris.index', compact('usuaris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuaris.usuaris');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuari = new Usuaris();
        $usuari->nom_usuari = $request->input('nombreUsuario');
        $usuari->contrasenya = bcrypt($request->input('password'));
        $usuari->correu = $request->input('email');
        $usuari->nom = $request->input('nombre');
        $usuari->cognom = $request->input('apellido');
        $usuari->actiu = $request->has('actiu');
        $usuari->tipus_usuaris_id = $request->input('tipo');

        $usuari->save();

        return redirect()->action([UsuariController::class, 'index']);
    }


    /**
     * Display the specified resource.
     */
    public function show(Usuaris $usuari)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuaris $usuari)
    {
        return view('usuaris.update', compact('usuari'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuaris $usuari)
    {
        $request->validate([
            'nom_usuari' => 'required',
            'nom' => 'required',
            'cognom' => 'required',
            'correu' => 'required|email',
            'tipus_usuaris_id' => 'required'
        ]);

        $usuari->update([
            'nom_usuari' => $request->nombreUsuario,
            'nom' => $request->nombre,
            'cognom' => $request->apellido,
            'correu' => $request->email,
            'tipus_usuaris_id' => $request->tipo,
            'actiu' => $request->has('activo') ? true : false,
        ]);

        return redirect()->action([UsuariController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuaris $usuari)
    {
        $usuari->delete();

        return redirect()->action([UsuariController::class, 'index']);
    }
}
