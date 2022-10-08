<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Direccion extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'direccion_individualizada';

    protected $fillable=[
    	'titulo',
        'fechaIni',
        'grado',
        'fechaFin',
        'alumnos',
        'estado',
        'cv',
        'miembros',
        'lgacs',
       'doc',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
