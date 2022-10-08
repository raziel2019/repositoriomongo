<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Material extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'material';

    protected $fillable=[
    	'descripcion',
        'titulo',
        'autor',
        'editorial',
        'date',
        'pais',
        'proposito',
        'considerar',
        'miembros',
        'lgacs',
       
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
