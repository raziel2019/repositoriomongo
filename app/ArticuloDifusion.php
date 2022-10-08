<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class ArticuloDifusion extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'articulo_difusion';

    protected $fillable=[
    	'autor',
        'titulo',
        'cuatrimestre',
        'estado',
        'pais',
        'nombre',
        'editorial',
        'volumen',
        'issn',
        'date',
        'proposito',
        'considerar',
        'miembros',
        'file',
    	'lgacs',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
