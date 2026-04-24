<?php

namespace App\Http\Controllers;

use App\Models\Stagiaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StagiaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $stagiaires = Stagiaire::all();
        return view('crud.index', compact('stagiaires'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'nom'=>'required|min:3|string',
            'genre'=>'required|string',
            'date'=>'required|date',
            'note'=>'required|numeric|min:0',
            'groupe'=>'required'
        ]);


        $stagiaire = new Stagiaire([
            'nom'=>$request->nom,
            'genre'=>$request->genre,
            'date'=>$request->date,
            'note'=>$request->note,
            'groupe'=>$request->groupe,
        ]);
        $stagiaire->save();
        return redirect()->route('stagiaire.index')->with('success', 'Etudiant ajouté avec succès!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Stagiaire $stagiaire)
    {
        return view('crud.show', compact('stagiaire'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stagiaire $stagiaire)
    {
        //
        return view('crud.edit', compact('stagiaire'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stagiaire $stagiaire)
    {
        //
        $validated = $request->validate([
            'nom'=>'required|min:3|string',
            'genre'=>'required|string',
            'date'=>'required|date',
            'note'=>'required|numeric|between:0,20',
            'groupe'=>'required'
        ]);
        $stagiaire -> update([
            'nom'=>$request->nom,
            'genre'=>$request->genre,
            'date'=>$request->date,
            'note'=>$request->note,
            'groupe'=>$request->groupe
        ]);

        return redirect()->route('stagiaire.index')->with('success', "Stagiaire modifié avec succès");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stagiaire $stagiaire)
    {
        //
        $stagiaire->delete();
        return redirect()->route('stagiaire.index')->with('success', 'Stagiaire supprimé avec succès');
    }
}
