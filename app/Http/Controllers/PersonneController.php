<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use Illuminate\Http\Request;

class PersonneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $personnes = Personne::all();
        return view('personne.index', compact('personnes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('personne.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom'=>'required|string|min:3',
            'email' => 'required|email|unique:personnes,email',
            'ville'=>'required|string',
            'category'=>'required',
            'statut'=>'required'
        ]);

        $personnes = Personne::create([
            'nom'=>$request->nom,
            'email'=>$request->email,
            'ville'=>$request->ville,
            'category'=>$request->category,
            'statut'=>$request->statut
        ]);

        return view('personne.index')->with('success','ajouter');
    }

    /**
     * Display the specified resource.
     */
    public function show(Personne $personne)
    {
        //
        return view('personne.show', compact('personne'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personne $personne)
    {
        //
        return view('personne.edit',compact('personne'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Personne $personne)
    {
        //
        $validated = $request->validate([
            'nom'=>'required|string|min:3',
            'email'=>'required|string|unique:email,personne',
            'ville'=>'required|string',
            'category'=>'required',
            'statut'=>'required'
        ]);

        $personnes = update([
            'nom'=>$request->nom,
            'email'=>$request->email,
            'ville'=>$request->vile,
            'category'=>$request->category,
            'statut'=>$request->statut
        ]);

        return redirect()->route('personne.index')->with('success','modifier');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personne $personne)
    {
        //
        $personne->delete();
        return redirect()->route('personne.index')->with('success','supprimer');
    }
}
