<?php

namespace App;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Docencia extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'docencia';

    protected $fillable=[
    	'nombre',
        'institucion',
        'programa',
        'cuatrimestre',
        'grupo',
        'nivel',
        'fechaIni',
        'alumnos',
        'duracion',
        'hMes',
        'hSemana',
       'doc',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
