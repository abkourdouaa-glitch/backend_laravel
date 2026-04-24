<?php

namespace App\Http\Controllers;

use App\Models\Benevole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BenevoleController extends Controller
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
        // return view('benevoles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
        {
            $request->validate([
                'nom' => 'required',
                'email' => 'required|email|unique:benevoles',
                'password' => 'required|min:8',
                'ville' => 'required',
                'date_naissance' => 'required|date',
            ]);
// $benevole = \App\Models\Benevole::create
            $benevole = \App\Models\Benevole::create([
                'nom' => $request->nom,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'ville' => $request->ville,
                'date_naissance' => $request->date_naissance,
                'role' => 'benevole', 
            ]);

            return response()->json([
                'message' => 'Bénévole créé avec succès !',
                'user' => $benevole
            ], 201);
        }

    /**
     * Display the specified resource.
     */
    public function show(Benevole $benevole)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Benevole $benevole)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Benevole $benevole)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Benevole $benevole)
    {
        //
    }
}
