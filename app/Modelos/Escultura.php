<?php
/**
 * Created by PhpStorm.
 * User: ManuelIgnacio
 * Date: 05/04/2017
 * Time: 19:42
 */

namespace Proyecto1\Modelos;

use Illuminate\Database\Eloquent\Model;

class Escultura extends Model
{
    protected $table = "esculturas";

    protected $fillable = [
        'ciudad', 'definicion', 'tipoEscultura', 'procedencia', 'contexto', 'hallazgoCasual', 'localizacioActual', 'estadoConservacion',
        'material', 'cronologia', 'dimensiones', 'restaurada', 'restoPolicromia', 'paralelos', 'informacionGrafica',
    ];

    public function bibliografia()
    {
        return $this->belongsToMany('app\Modelos\Bibliografia');
    }

    public function ciudad()
    {
        return $this->belongsTo('app\Modelos\Ciudad');
    }


}