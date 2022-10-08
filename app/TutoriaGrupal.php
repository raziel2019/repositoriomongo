<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class TutoriaGrupal extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'tutoria_grupal';

    protected $fillable=[
    	'estudiantes',
        'nivel',
        'programa',
        'fechaIni',
        'fechaFin',
        'tipo',
        'estado',
              
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
