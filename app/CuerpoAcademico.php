<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class CuerpoAcademico extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'cuerpo_academico';

    protected $fillable=[
    	'nombre',
        'clave',
        'grado',
        'duracion',
        'lineas',
       'doc',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
