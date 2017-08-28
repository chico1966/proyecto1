<?php

namespace Proyecto1\Modelos;

use Illuminate\Database\Eloquent\Model;

class Bibliografia extends Model
{
    protected $table = "bibliografias";

    protected $fillable = [
        'id', 'idElemento', 'referencia',
    ];
    public function ciudad()
    {
        return $this->belongsToMany('app\Modelos\Ciudad');
    }
    public function escultura()
    {
        return $this->belongsToMany('app\Modelos\Escultura');
    }
}
