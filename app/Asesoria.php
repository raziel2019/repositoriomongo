<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Asesoria extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'Asesoria';

    protected $fillable=[
        'nombre',
        'cuatrimestre',
        'alcance',
        'empresa',
        'pais',
        'fecha',
        'estado',
        'investigadores',
        'curriculum_de_cuerpo_academico',
        'miembros',
        'lgacs',
        'file',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
