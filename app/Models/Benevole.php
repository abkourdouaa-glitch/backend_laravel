<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class Benevole extends Authenticatable
{
    //
    use Notifiable;
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
