<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Benevole extends Model
{
    //
    protected $fillable = [
        'nom', 
        'email', 
        'password', 
        'ville', 
        'date_naissance', 
        'role'
    ];
    protected $hidden = [
        'password',
    ];
}
