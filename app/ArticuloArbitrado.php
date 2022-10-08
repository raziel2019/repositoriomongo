<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class ArticuloArbitrado extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'ArticuloArbitrado';

    protected $fillable=[
    	'autor',
        'titulo',
        'estado',
        'pais',
        'nombre',
        'editorial',
        'volumen',
        'issn',
        'date',
        'proposito',
        'cv',
        'miembros',
    	'lgacs',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
