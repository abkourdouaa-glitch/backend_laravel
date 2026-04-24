<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ajouterEt;
use App\Http\Requests\compte;

class FormController extends Controller
{
    public function store(ajouterEt $request){
       $validated = $request->validated();

       return redirect()->route('Form.ajouter')->with("success", "Etudiant ajouté avec succès!");
    }
    public function ajouter(){
        return view('Form.ajouter');
    }

    public function store2(Request $request){

       $validated = $request->validated();

       return redirect()->route('Form.compte')->with("success", "Compte créer avec succes");
    }
    public function compte(){
        return view('Form.compte');
    }
}
