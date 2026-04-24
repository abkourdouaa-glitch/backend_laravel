<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $fillable = ([
        'nom','email','poste','salaire','statut'
    ]);
}
