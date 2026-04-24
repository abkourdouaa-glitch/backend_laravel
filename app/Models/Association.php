<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    //
    protected $fillable = [
        'nom', 
        'email', 
        'password', 
        'ville', 
        'description', 
        'recepisse', 
        'role'
    ];
    protected $hidden = [
        'password',
    ];
}
