<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Str;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $annonces = Annonce::all();
        return view('annonce.index', compact('annonces'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('annonce.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'titre'=>'required|string|min:3',
            'description'=>'required|string',
            'type'=>'required',
            'ville'=>'required|string',
            'superficie'=>'required|numeric',
            'neuf'=>'required',
            'prix'=>'required|numeric',
            'photo'=>'nullable|image|mimes:jpg,jpeg,png,gif|max:2048'
        ]);
        
        $filename = null;
        if ($request->hasFile('photo')) {
            $filename = $request->file('photo')->store('photos','public'); 
        }

        $annonce = new Annonce([
            'titre'=>$request->titre,
            'description'=>$request->description,
            'type'=>$request->type,
            'ville'=>$request->ville,
            'superficie'=>$request->superficie,
            'neuf'=>$request->neuf,
            'prix'=>$request->prix,
            'photo'=>$filename,
        ]);
        $annonce->save();
        return redirect()->route('annonce.index')->with('success', 'Ajout réussi!');
    }

    /*
     * Display the specified resource.
     */
    public function show(Annonce $annonce)
    {
        //
        return view('annonce.show', compact('annonce'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Annonce $annonce)
    {
        //
        return view('annonce.edit', compact('annonce'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Annonce $annonce)

    {
        $validated = $request->validate([
            'titre'=>'required|string|min:3',
            'description'=>'required|string',
            'type'=>'required',
            'ville'=>'required|string',
            'superficie'=>'required|numeric',
            'neuf'=>'required',
            'prix'=>'required|numeric',
            'photo'=>'nullable|image|mimes:jpg,jpeg,png,gif|max:2048'
        ]);

        $filename = $annonce->photo;
        if ($request->hasFile('photo')) {
            // Supprimer l'ancienne image
            if ($annonce->photo) {
                Storage::disk('public')->delete($annonce->photo);
            }
            $file = $request->file('photo');
            $filename = $file->store('photos', 'public');
        }
        $annonce -> update([
            'titre'=>$request->titre,
            'description'=>$request->description,
            'type'=>$request->type,
            'ville'=>$request->ville,
            'superficie'=>$request->superficie,
            'neuf'=>$request->neuf,
            'prix'=>$request->prix,
            'photo'=>$filename
        ]);
        return redirect()->route('annonce.index')->with('success', "Annonce modifié avec succès");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Annonce $annonce)
    {
        // 1. Supprimer le fichier
        if ($annonce->photo) {
           Storage::disk('public')->delete($annonce->photo);
        }
        $annonce->delete();
         return redirect()->route('annonce.index')->with('success', 'Annonce supprimé avec succès');
    }

    public function dashboard()
    {
        $stats = [
            'total' => Annonce::count(),
            'prix_total' => Annonce::sum('prix') / 1000000,
            'prix_moyen'  => Annonce::avg('prix') / 1000,
            'surface_total'=> Annonce::sum('superficie'),
        ];

        return view('annonce.dashboard', compact('stats'));
    }

}
