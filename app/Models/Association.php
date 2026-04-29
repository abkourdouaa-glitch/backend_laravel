<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class Association extends Authenticatable
{
    //
    use Notifiable;
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
