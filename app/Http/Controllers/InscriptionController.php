<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('inscription');
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
        // Validation des données
        $request->validate([
            'nom' => 'required',
            'tuteur' => 'required',
            'tutrice' => 'required',
            'sexe' => 'required',
            'profession' => 'required',
            'dateNaissance' => 'required|date',
            'dateDemenagement' => 'required|date',
            'provenance' => 'required',
            'destination' => 'required',
        ]);

        Inscription::create([
            'nom' => $request->nom,
            'tuteur' => $request->tuteur,
            'tutrice' => $request->tutrice,
            'sexe' => $request->sexe,
            'profession' => $request->profession,
            'dateNaissance' => $request->dateNaissance,
            'dateDemenagement' => $request->dateDemenagement,
            'provenance' => $request->provenance,
            'destination' => $request->destination,
        ]);
        return redirect()->back()->with('success', 'Enregistrement réussi');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
