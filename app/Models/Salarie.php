<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salarie extends Model
{
    //
    protected $fillable = ([
        'nomSal','prenomSal','dateEmbauche','dateNaissance','fonction','codeSer'
    ]);

    public function service(){
        return $this->belongsTo(Service::class);
    }

    public function voitures(){
        return $this->belongsToMany(Voiture::class,'utilisations','matricule','matricule','codeSal','codeSal')->withPivot('dateDebutUtilisation','dateFinUtilisation');
    }
}
