<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ecole extends Model
{
    //
    protected $fillable = (['personne_id','groupe','projet']);

    public function personnes(){
        return $this->hasMany(Personne::class);
    }
}
