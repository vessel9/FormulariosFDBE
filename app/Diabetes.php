<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diabetes extends Model
{
    protected $fillable = [
        'tipo_diabetes',
        'fecha_diagnostico'
    ];

    

    //Relación 1 - N
    public function paciente()
    {
        return $this->hasMany('App\Models\Paciente');
    }
}
