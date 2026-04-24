<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    //
    protected $fillable = (['nom','email','ville','category','statut']);


    public function ecole(){
        return $this->belongsTo(Ecole::class);
    }
}
