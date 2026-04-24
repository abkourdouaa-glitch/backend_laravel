<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Serveur extends Model
{
    //
    protected $fillable = ([
        'date_embauche','user_id'
    ]);

    function user(){
        return $this->belongTo(User::class);
    }

    function commandes(){
        return $this->hasMany(Commandes::class);
    }
}
