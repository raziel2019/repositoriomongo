<?php

namespace App;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class GestionAcademica extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'gestion_academica';

    protected $fillable=[
    	'nombre',
        'gestion',
        'cuatrimestre',
        'programa',
        'grado',
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
        'file',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
