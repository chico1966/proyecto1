<?php

namespace Proyecto1\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Proyecto1\Http\Controllers\Controller;
use Proyecto1\Modelos\Bibliografia;

class BibliografiasController extends Controller
{
    //Listar Bibliografias
    public function getIndex($idElemento)
    {
        $bibliografias = DB::table('bibliografias')->where('idElemento','=',$idElemento)->get();
        return view('bibliografias.lista_bibliografias')
            ->with('bibliografias', $bibliografias)
            ->with('idElemento', $idElemento);
    }
    //Crear una Bibliografia
    public function getCreate($idElemento)
    {
        return view('bibliografias.crear_bibliografia')->with('idElemento', $idElemento);
    }
    //Mostrar una Bibliografia
    public function getShow($id)
    {
        $bibliografia = Bibliografia::find($id);
        return view('bibliografias.mostrar_bibliografia')->with('bibliografia', $bibliografia);
        //return view('ciudades.mostrar_ciudad', ['id' => Ciudad::findOrFail($id)]);


    }
    //Editar una Bibliografia
    public function getEdit($id)
    {
        $bibliografia = Bibliografia::find($id);
        return view('bibliografias.editar_bibliografia')->with('bibliografia', $bibliografia);
    }
    //Agregar una Bibliografia
    public function postStorage(Request $request)
    {
        $bibliografia=new Bibliografia();
        $bibliografia->fill($request->all());
        $bibliografia->save();
        //return redirect()->route('lista.bibliografias', $bibliografia->idElemento);
        return view('bibliografias.mostrar_bibliografia')->with('bibliografia', $bibliografia);
    }
    //Actualizar una Bibliografia
    public function postUpdate(Request $request)
    {
        $bibliografia = Bibliografia::find($request->id);
        $bibliografia->fill($request->all());
        $bibliografia->save();
        return view('bibliografias.mostrar_bibliografia')->with('bibliografia', $bibliografia);
        //dd($request->all());

    }
    //Eliminar una Bibliografia
    public function getDestroy($id)
    {
        $bibliografia = Bibliografia::find($id);
        $bibliografia->delete();
        return redirect()->route('lista.bibliografias', $bibliografia->idElemento);
    }

}
