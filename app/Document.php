<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Document extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'documents';

    protected $fillable=[
    	'titulo',
    	'autor',
        'descripcion',
        'tipo',
    	'file',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}