<?php

namespace Proyecto1\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Proyecto1\Http\Controllers\Controller;
use Proyecto1\Modelos\Ciudad;
use Proyecto1\Modelos\Escultura;

class EsculturasController extends Controller
{
    //Listar Esculturas
    public function getIndex($ciudad)
    {
        $esculturas = DB::table('esculturas')->where('ciudad','=',$ciudad)->get();
        return view('esculturas.lista_esculturas')
            ->with('esculturas', $esculturas)
            ->with('ciudad', $ciudad);
    }
    //Crear una Escultura
    public function getCreate($ciudad)
    {
        return view('esculturas.crear_escultura')->with('ciudad', $ciudad);
    }
    //Mostrar una Escultura
    public function getShow($id)
    {
        $escultura = Escultura::find($id);
        return view('esculturas.mostrar_escultura')->with('escultura', $escultura);
        //return view('ciudades.mostrar_ciudad', ['id' => Ciudad::findOrFail($id)]);


    }
    //Editar una Escultura
    public function getEdit($id)
    {
        $escultura = Escultura::find($id);
        return view('esculturas.editar_escultura')->with('escultura', $escultura);
    }
    //Agregar una Escultura
    public function postStorage(Request $request)
    {
        $escultura=new Escultura();
        $escultura->fill($request->all());
        $escultura->save();
        return redirect()->route('lista.esculturas', $escultura->ciudad);
    }
    //Actualizar una Escultura
    public function postUpdate(Request $request)
    {
        $escultura = Escultura::find($request->id);
        $escultura->fill($request->all());
        $escultura->save();
        return view('esculturas.mostrar_escultura')->with('escultura', $escultura);
    }
    //Eliminar una Escultura
    public function getDestroy($id)
    {
        $escultura = Escultura::find($id);
        $escultura->delete();
        return redirect()->route('lista.esculturas', $escultura->ciudad);
    }

}
