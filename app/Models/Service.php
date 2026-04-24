<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $fillable = ([
        'nomSer'
    ]);

    public function salaries(){
        return $this->hasMany(Salarie::class);
    }
}
