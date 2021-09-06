<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = [
        'cedula',
        'nombres',
        'apellidos',
        'fecha_nacimiento',
        'email',
        'lugar_nacimiento'
    ];

    //Relación 1 - N
    public function contacto()
    {
        return $this->hasMany('App\Models\Contacto');
    }

    //Relación 1 - N (inversa)
    public function ciudad()
    {
        return $this->belongsTo('App\Models\Ciudad');
    }

    public function diabetes()
    {
        return $this->belongsTo('App\Models\Diabetes');
    }

    public function representante()
    {
        return $this->belongsTo('App\Models\Representante');
    }

    public function info_medica()
    {
        return $this->belongsTo('App\Models\Informacion_Medica');
    }

    public function hemoglobina()
    {
        return $this->belongsTo('App\Models\Hemoglobina_Glicosilada');
    }

    public function hipoglucemia()
    {
        return $this->belongsTo('App\Models\Hipoglucemia');
    }

    public function glucosa()
    {
        return $this->belongsTo('App\Models\Glucosa');
    }

    //Relación N - N
    public function insulina()
    {
        return $this->belongsToMany('App\Models\Insulina')->withPivot('dosis');
    }
    public function ayuda_fundacion()
    {
        return $this->belongsToMany('App\Models\Ayudas_Fundacion');
    }
}
