<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilmsController extends Controller
{
    public function index()
    {
        $films = DB::table('films')->get();
        return view('TP7.films', compact('films'));
    }

    public function show($id)
    {
       $film = DB::table('films')->where('id', $id)->first();
       return view('TP7.show', compact('film'));
    }

    public function acteursDetail($id)
    {
        $acteurs = DB::table('participations')
        ->join('acteurs','participations.acteur_id','=','acteurs.id')
        ->select('acteurs.nom','acteurs.prenom','participations.role','participations.typeRole')
        ->where('participations.films_id',$id)->get();
        return view('TP7.acteursDetail', compact('acteurs'));
    }

    

}
