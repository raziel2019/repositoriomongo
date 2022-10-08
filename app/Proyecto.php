<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Proyecto extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'proyecto';

    protected $fillable=[
    	'nombre',
        'titulo',
        'tipo',
        'curriculum_de_cuerpo_academico',
        'investigadores',
        'alumnos',
        'actividades',
        'fecha',
        'fecha_termino',
        'miembros',
        'lgacs',
       
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
