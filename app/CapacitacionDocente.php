<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class CapacitacionDocente extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'capacitacion_docente';

    protected $fillable=[
    	'nombre',
      'tipo',
      'cuatrimestre',
      'descripcion',
      'duracion',
      'fecha',
      'lugar',
      'instructor',
      'grupo',
      'file',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
