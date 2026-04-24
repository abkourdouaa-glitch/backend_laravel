<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
public function index(){
    $products = [
            ["id"=>1,"title"=>"Product 1", "price"=>120,],
            ["id"=>2,"title"=>"Product 2", "price"=>300,],
            ["id"=>3,"title"=>"Product 3", "price"=>490,],
            ["id"=>4,"title"=>"Product 4", "price"=>500,]
        ];
    return view('layouts.Products', compact('products'));
}
public function voir($id){
    $products = [
            ["id"=>1,"title"=>"Product 1", "price"=>120, "desc"=>"description de produit 1"],
            ["id"=>2,"title"=>"Product 2", "price"=>300,  "desc"=>"description de produit 2"],
            ["id"=>3,"title"=>"Product 3", "price"=>490 ,"desc"=>"description de produit 3"],
            ["id"=>4,"title"=>"Product 4", "price"=>500, "desc"=>"description de produit 4"]
        ];
        
        $product = collect($products)->firstWhere('id', $id);
        if (!$product) {
                abort(404, 'Produit introuvable');
            }
    return view('layouts.voir', compact('product'));
}

public function create(){
    return view('Form.create');
}

public function store(Request $request){
        $validated = $request->validate([
            'title' => 'required|min:3|string|max:100',
            'price' => 'required|numeric|min:0',
            'desc' => 'required|string|min:10',
         ],[
            'title.required' => 'Le titre est obligatoire',
            'title.min' => 'le titre doit contenir au moins 3 caractères',
            'title.string' => ' doit être une chaîne de caractères',

            'price.required' => 'Le prix est obligatoire',
            'price.numeric' => ' doit être un nombre',
            'price.min' => ' le prix doit être supérieur ou égal à 0 ',

            'desc.required' => 'Le description est obligatoire',
            'desc.min' => 'la description doit contenir au moins 10 caractères ',
            'desc.string' => 'doit être une chaîne de caractères ',
         ]);   
   return redirect()->route('Form.create')->with('success', 'Produit ajouté avec succès');
}


}

