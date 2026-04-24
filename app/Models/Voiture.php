<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    //
    protected $fillable = ([
        'matricule','marque','couleur','dateMiseEnCirculation'
    ]);

    public function salaries(){
        return $this->belongsToMany(Voiture::class,'utilisations','codeSal','codeSal','matricule','matricule')->withPivot('dateDebutUtilisation','dateFinUtilisation');
    }

    // public function utilisation(){
    //     return $this->belongsTo(Utilisation::class);
    // }
}
