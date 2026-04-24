<?php

namespace App\Http\Controllers;

use App\Models\Association;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AssociationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('associations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
   {
        $request->validate([
            'nom' => 'required|string',
            'email' => 'required|email|unique:associations',
            'password' => 'required|min:8',
            'ville' => 'required',
            'description' => 'required',
            'recepisse' => 'required|file|mimes:pdf,jpg,png|max:2048',
        ]);

        $filePath = null;
        if ($request->hasFile('recepisse')) {
            //storage
            $filePath = $request->file('recepisse')->store('recepisses', 'public');
        }

        $association = \App\Models\Association::create([
            'nom' => $request->nom,
            'email' => $request->email,
            'password' => \Illuminate\Support\Facades\Hash::make($request->password),
            'ville' => $request->ville,
            'description' => $request->description,
            'recepisse' => $filePath, 
            'role' => 'association',
        ]);

        return response()->json([
            'message' => 'Association créée avec succès !',
            'user' => $association
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Association $association)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Association $association)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Association $association)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Association $association)
    {
        //
    }
}
