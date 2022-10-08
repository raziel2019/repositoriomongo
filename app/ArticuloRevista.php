<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class ArticuloRevista extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'revista';

    protected $fillable=[
    	'autor',
        'titulo',
        'descripcion',
        'estado',
        'pais',
        'nombre',
        'editorial',
        'pagina',
        'pagina2',
        'volumen',
        'indice',
        'issn',
        'date',
        'direccion',
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
