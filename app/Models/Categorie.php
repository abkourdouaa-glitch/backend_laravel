<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    //
    protected $fillable = ([
        'titre','photo'
    ]);

    function plats(){
        return $this->hasMany(Plat::class);
    }
}
