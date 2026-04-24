<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commandes extends Model
{
    //
    protected $fillable =(['serveur_id','numero_table','etat','paye']);

    function serveurs(){
        return $this->belongsTo(Serveur::class);
    }

    function plats(){
        return $this->belongsToMany(Plat::class)->withPivot('nombre');
    }
}
