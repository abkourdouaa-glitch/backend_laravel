<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoitureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function AfficherListeVoiture()
    {
        //
        $voitures = Voiture::all();
        return view('voiture.index', compact('voitures'));
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
    public function AjouterVoiture(Request $request)
    {
        //
        $voitur = Voiture::create($request->all());
        return redirect()->route('voiture.index');
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
    public function SupprimerVoiture($matricule)
    {
        $voiture = Voiture::findOrFail($matricule);
        $voiture->delete();
        return ;
    }
}
