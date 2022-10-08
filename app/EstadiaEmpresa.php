<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class EstadiaEmpresa extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'estadia_empresas';

    protected $fillable=[
    	'nombre',
        'grado',
        'programa',
        'empresa',
        'puntos',
        'resultados',
        'fechaIni',
        'fechaFin',
        'alumnos',
        'horas',
        'estado',
        'considerar',
        'miembros',
        'lgacs',
       'doc',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
