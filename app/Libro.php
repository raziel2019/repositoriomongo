<?php

namespace App;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Libro extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'libro';

    protected $fillable=[
    	'estado',
        'titulo',
        'autor',
        'editorial',
        'edicion',
        'tiraje',
        'isbn',
        'date',
        'pais',
        'proposito',
         
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
