<?php

namespace Proyecto1\Modelos;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = "ciudades";
	
	protected $fillable = [
        'nombre', 'conventus', 'categoria', 'extension', 'localizacion', 'municipio', 'provincia', 'tipoYacimiento',
		'cronologia', 'coord_x', 'coord_y'
    ];

    public function escultura()
    {
        return $this->hasMany('app\Modelos\Escultura');
    }
    public function bibliografia()
    {
        return $this->belongsToMany('app\Modelos\Bibliografia');
    }

//'fuentesLiterarias', 'escultura', 'epigrafia', 'numismatiica', 'arquitecturaPublica','arquitecturaPrivada', 'necropolis',

}
