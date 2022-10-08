<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Pdef extends Eloquent
{
    protected $primaryKey = '_id';
    
    protected $fillable = [
    	'nombre',
        'asunto',
    	'alcance',
    	'empresa',
        'docente',
    	'investigadores',
    	'autor',
        'titulo',
        'estado',
        'pais',
        'editorial',
        'volumen',
        'issn',
        'proposito',
        'miembros',
        'lgacs',
        'cv',
        'date',
        'area',
        'patrocinador',
        'tipo',
        'alumnos',
        'actividades',
        'inicio',
        'termino',
        'pagina',
        'pagina2',
        'paginas',
        'indice',
        'direccion',
        'edicion',
        'tiraje',
        'isbn',
        'año',
        'programa',
        'cuatri',
        'grupo',
        'nivel',
        'fecha',
        'duracion',
        'hMes',
        'hSemana',
        'fechaIni',
        'fechaFin',
        'numero',
        'evidencia',
        'considerar',
        'grado',
        'puntos',
        'resultados',
        'horas',
        'clave',
        'lineas',
        'tip',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
