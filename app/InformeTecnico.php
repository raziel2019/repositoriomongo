<?php

namespace App;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class InformeTecnico extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'informe_tecnico';

    protected $fillable=[
    	'nombre',
        'alcance',
        'autor',
        'año',
        'institucion',
        'date',
        'estado',
        'paginas',
        'pais',
        'proposito',
        'curriculum_de_cuerpo_academico',
        'miembros',
        'lgacs',
       
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
