<?php

namespace App\Http\Controllers;

use App\Models\Encuesta;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class EncuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('encuestas.listado', ['encuestas' => Encuesta::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('encuestas.nueva');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Generar un Identificador aleatorio
        $slug = Str::random(12);

        // Comprobar que no hay una encuesta con ese ID / Slug;
        $existe = Encuesta::where('slug', $slug)->first();
        if($existe){
            return redirect()->back()->withErrors(['error' => 'Ya existe una encuesta con ese id']);
        }



        $encuesta = new Encuesta;
        $encuesta->slug = $slug;
        $encuesta->pregunta = $request->pregunta;
        $encuesta->r1 = $request->r1;
        $encuesta->r2 = $request->r2;
        $encuesta->r3 = $request->r3;
        $encuesta->r4 = $request->r4;

        $encuesta->save();

        // Redireccion a la home -> /encuestas
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $encuesta = Encuesta::where('slug', $slug)->firstOrFail();
        return view('encuestas.show', ['encuesta' => $encuesta]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
