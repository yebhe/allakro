<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Competence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CompetenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        // je doit recupéré uniquement ceux qui sont en vente
        return view('competence');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $competence = Competence::all();
        return view('communaute', compact('competence') );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'nom' => 'required',
            'service' => 'required',
            'lieu' => 'required',
            'contact' => 'required',
            'email' => 'required',
            'description' => 'required',
            'prix' => 'required',
            'image' => 'required',

        ]);
        // Créer une nouvelle entrée dans la base de données
        $competence = new Competence();
        $competence->nom = $request->nom;
        $competence->service = $request->service;
        $competence->lieu = $request->lieu;
        $competence->contact = $request->contact;
        $competence->email = $request->email;
        $competence->description = $request->description;
        $competence->prix = $request->prix;
            // Télécharger l'image si elle est fournie
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->storeAs('images', $imageName);
            $competence->image = 'images/'.$imageName;
        } else {
            $competence->image = null;
        }

        $competence->save();


        // Rediriger vers une page avec un message de succès
        return redirect()->route('competence')->with('success', 'Annonce artisanale créée avec succès!');

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
