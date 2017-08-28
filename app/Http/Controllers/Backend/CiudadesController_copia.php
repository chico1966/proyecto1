<?php

namespace Proyecto1\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Proyecto1\Http\Controllers\Controller;
use Proyecto1\Modelos\Ciudad;

class CiudadesController extends Controller
{
        //Listar Ciudades
		public function getIndex()
		{
				$ciudades = Ciudad::all();
				return view('ciudades.lista_ciudades')->with('ciudad', $ciudades);
		}
        //Crear una Ciudad
		public function getCreate()
		{
			return view('ciudades.crear_ciudad');
		}
		//Mostrar una Ciudad
        public function getShow($id)
        {
            $ciudad = Ciudad::find($id);
            return view('ciudades.mostrar_ciudad')->with('ciudad', $ciudad);
            //return view('ciudades.mostrar_ciudad', ['id' => Ciudad::findOrFail($id)]);


        }
        //Editar una Ciudad
        public function getEdit($id)
        {
            $ciudad = Ciudad::find($id);
            return view('ciudades.editar_ciudad')->with('ciudad', $ciudad);
        }
        //Agregar una Ciudad
		public function postStorage(Request $request)
		{
			//dd($request->all());
            $ciudad=new Ciudad();
            $ciudad->fill($request->all());
            $ciudad->save();
            return redirect()->route('lista.ciudades');
		}
        //Actualizar una Ciudad
        public function postUpdate(Request $request)
        {
            $ciudad = Ciudad::find($request->id);
            $ciudad->fill($request->all());
            $ciudad->save();
            return view('ciudades.mostrar_ciudad')->with('ciudad', $ciudad);
            //dd($request->all());
        }
        //Eliminar una Ciudad
        public function getDestroy($id)
        {
            $ciudad = Ciudad::find($id);
            $ciudad->delete();
            return redirect()->route('lista.ciudades');
        }

}