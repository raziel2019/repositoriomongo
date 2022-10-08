<?php

namespace App;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
// use Illuminate\Contracts\Auth\Authenticatable;
// use Illuminate\Auth\Authenticatable as AuthenticableTrait;
// use Illuminate\Notifications\Notifiable;
// use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

use Illuminate\Auth\Authenticatable;
use Jenssegers\Mongodb\Eloquent\Model as Model;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Maklad\Permission\Traits\HasRoles;

class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'division',
        'programa',
        'sei',
        'prodep',
        'grado',
        'curp',
        'rfc',
        'especialidad',
        'avatar',
        'cat_profesor',
        'password',
    ];
    
        public function documents()
    {
        return $this->hasMany(Document::class);
    }

    public function pdefs()
    {
        return $this->hasMany(Pdef::class);
    }

    public function ArticuloArbitrado()
    {
        return $this->hasMany(ArticuloArbitrado::class);
    }

    public function ArticuloDifusion()
    {
        return $this->hasMany(ArticuloDifusion::class);
    }
  
    public function ArticuloRevista()
    {
        return $this->hasMany(ArticuloRevista::class);
    }
  
    public function Asesoria()
    {
        return $this->hasMany(Asesoria::class);
    }
  
    public function CapacitacionDocente()
    {
        return $this->hasMany(CapacitacionDocente::class);
    }
  
    public function CuerpoAcademico()
    {
        return $this->hasMany(CuerpoAcademico::class);
    }
  
    public function Direccion()
    {
        return $this->hasMany(Direccion::class);
    }
  
    public function Docencia()
    {
        return $this->hasMany(Docencia::class);
    }
  
    public function EstadiaEmpresa()
    {
        return $this->hasMany(EstadiaEmpresa::class);
    }
  
    public function GestionAcademica()
    {
        return $this->hasMany(GestionAcademica::class);
    }
  
    public function InformeTecnico()
    {
        return $this->hasMany(InformeTecnico::class);
    }
  
    public function Libro()
    {
        return $this->hasMany(Libro::class);
    }
  
    public function Material()
    {
        return $this->hasMany(Material::class);
    }
  
    public function Proyecto()
    {
        return $this->hasMany(Proyecto::class);
    }
  
    public function TutoriaGrupal()
    {
        return $this->hasMany(TutoriaGrupal::class);
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
