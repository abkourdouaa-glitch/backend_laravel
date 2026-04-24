<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Composant extends Model
{
    //
    protected $fillable = (['libelle']);

    function plats(){
        return $this->belongsToMany(Plat::class)->withPivot('quantite','unite');
    }
}
