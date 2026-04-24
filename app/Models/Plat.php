<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    //
    protected $fillable = (['categorie_id','intitule','description','prix','photo']);

    function categorie(){
        return $this->belongsTo(Categorie::class);
    }

    function composants(){
        return $this->belongsToMany(Composant::class)->withPivot('quantite','unite');
    }

    function commandes(){
        return $this->belongsToMany(Commndes::class)->withPivot('nombre');
    }
}

