<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ActualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actualites = Actualite::orderBy('created_at', 'desc')->get();
    
        return response()->json($actualites);
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
    public function store(Request $request) {

        $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'date' => 'required|date',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048'
        ]);


        $image = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('actualites', 'public');
        }


        $news = Actualite::create([
            'titre' => $request->titre,
            'description' => $request->description,
            'date' => $request->date,
            'image' => $image
        ]);

        return response()->json($news, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $actualite = Actualite::findOrFail($id);
        if (!$actualite) {
        return response()->json(['message' => 'Not Found'], 404);
    }
        return response()->json($actualite);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Actualite $actualite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) {
        $actualite = Actualite::findOrFail($id);

        $request->validate([
            'titre'  => 'required',
            'description' => 'required',
            'date'  => 'required|date',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048'
        ]);

        $actualite->titre  = $request->titre;
        $actualite->description = $request->description;
        $actualite->date  = $request->date;


        if ($request->hasFile('image')) {
            if ($actualite->image) {
                \Storage::disk('public')->delete($actualite->image);
            }
            $actualite->image = $request->file('image')->store('actualites', 'public');
        }

        $actualite->save();

        return response()->json($actualite);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) {
        $actualite = Actualite::find($id);
        if ($actualite) {
            if ($actualite->image) {
                \Storage::disk('public')->delete($actualite->image);
            }
            $actualite->delete();
            return response()->json(['message' => 'Supprimé avec succès']);
        }
    }
}
