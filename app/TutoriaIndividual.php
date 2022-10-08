<?php

namespace App;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class TutoriaIndividual extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'tutoria_individual';

    protected $fillable=[
        'nivel',
        'programa',
        'fechaIni',
        'fechaFin',
        'tipo',
        'estado',
        'doc',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
