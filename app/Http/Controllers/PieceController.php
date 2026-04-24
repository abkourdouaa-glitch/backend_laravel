<?php

namespace App\Http\Controllers;

use App\Models\Piece;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PieceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pieces = Piece::all();
        return view('piece.index', compact('pieces'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('piece.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            "reference"=>"required|string|min:3",
            "designation"=>"required|string",
            "categorie"=>"required",
            "prix"=>"required|numeric",
            "statut"=>"required",
            "image"=>"nullable|image|mimes:jpg,jpeg,png|max:2048",
        ]);

        $filename = null;
        if($request->hasFile('image')){
            $filename = $request->file('image')->store('images','public');
        }

        $piece = new Piece ([
            "reference"=>$request->reference,
            "designation"=>$request->designation,
            "categorie"=>$request->categorie,
            "prix"=>$request->prix,
            "statut"=>$request->statut,
            "image"=>$filename,
        ]);
        $piece->save();
        return redirect()->route('piece.index')->with('success','piece ajouter avec succé!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Piece $piece)
    {
        //
        return view('piece.show', compact('piece'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Piece $piece)
    {
        //
        return view('piece.edit', compact('piece'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Piece $piece)
    {
        //
        $validated = $request->validate([
            "reference"=>"required|string|min:3",
            "designation"=>"required|string",
            "categorie"=>"required",
            "prix"=>"required|numeric",
            "statut"=>"required",
            "image"=>"nullable|image|mimes:jpg,jpeg,png|max:2048",
        ]);

        $filename = $piece->image;
        if($request->hasFile('image')){
            if($piece->image){
                Storage::disk('public')->delete($piece->image);
            }
            $filename = $request->file('image')->store('images','public');
        }

        $piece = update([
            "reference"=>$request->reference,
            "designation"=>$request->designation,
            "categorie"=>$request->categorie,
            "prix"=>$request->prix,
            "statut"=>$request->statut,
            "image"=>$filename,
        ]);
        return redirect()->route('piece.index')->with('success','piece modifié avec succé!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Piece $piece)
    {
        //
        if($piece->image){
            Storage::disk('public')->delete($piece->image);
        }
        $piece->delete();
        return redirect()->route('piece.index')->with('success', 'piece supprimer avec succé!');
    }
}
