<?php

namespace App\Http\Controllers;

use App\Models\Campeonato;
use Illuminate\Http\Request;

class CampeonatosController
{   
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $campeonatos = Campeonato::orderBy('nombre')->get();
        return $campeonatos;
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
    public function show(Campeonato $campeonato)
    {
        return $campeonato;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Campeonato $campeonato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Campeonato $campeonato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Campeonato $campeonato)
    {
        //
    }

    public function equipos($id)
    {
        // Encuentra el campeonato por ID
        $campeonato = Campeonato::find($id);

        if (!$campeonato) {
            return response()->json(['error' => 'Campeonato no encontrado'], 404);
        }

        // Obtén los equipos asociados al campeonato
        $equipos = $campeonato->equipos()->get(); // Asumiendo que tienes una relación definida en el modelo Campeonato

        return response()->json($equipos);
    }
}
