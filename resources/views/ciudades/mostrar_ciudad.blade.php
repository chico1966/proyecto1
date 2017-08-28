@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
				<br>
				<h1 align="center" class="panel-title">CIUDADES de LA BÉTICA</h1>
				<br>
                <div class="panel-heading">
                    <h3 align="center" class="panel-title">{{$ciudad->nombre}}</h3>
                </div>
                <div class="panel-body">
					<a href="{{route('lista.esculturas', $ciudad->nombre)}}" class="btn btn-primary btn-sm">Esculturas</a>
                    <a href="{{route('lista.bibliografias', $ciudad->id)}}" class="btn btn-primary btn-sm">Bibliografía</a>
					<a href="{{route('lista.ciudades')}}" class="btn btn-primary btn-sm">Volver a Ciudades</a>
					<br>
					<br>
					<form action="{{route('lista.ciudades')}}" method="GET">
					  {{ csrf_field() }}
						<label for="inputName" class="col-sm-2 control-label">Ciudad</label>
						<div class="col-sm-10">
							<input type="text" name="nombre" class="form-control" id="inputName" VALUE="{{$ciudad->nombre}}" readonly><br>
						</div>
						<br>
						<label for="inputConve" class="col-sm-2 control-label">Conventus al que Pertenece</label>
						 <div class="col-sm-10">
							  <input type="text" name="conventus" class="form-control" id="inputConve" VALUE="{{$ciudad->conventus}}" readonly><br>
						 </div>
						<br>					
						<label for="inputCateg" class="col-sm-2 control-label">Categoría de Ciudad</label>
						  <div class="col-sm-10">
							  <input type="text" name="categoria" class="form-control" id="inputCateg" value="{{$ciudad->categoria}}" readonly><br>
						  </div>
						<br>
						<label for="inputExten" class="col-sm-2 control-label">Extensión</label>
						<div class="col-sm-10">
						  <input type="number" name="extension" class="form-control" id="inputExten" value="{{$ciudad->extension}}" readonly><br>
						</div>
						<br>
						<label for="inputLoca" class="col-sm-2 control-label">Localización</label>
						<div class="col-sm-10">
						  <input type="text" name="localizacion" class="form-control" id="inputLoca" value="{{$ciudad->localizacion}}" readonly><br>
						</div>
						<br>
						<label for="inputMuni" class="col-sm-2 control-label">Municipio</label>
						<div class="col-sm-10">
						  <input type="text" name="municipio" class="form-control" id="inputMuni" value="{{$ciudad->municipio}}" readonly><br>
						</div>
						<br>
						<label for="inputProv" class="col-sm-2 control-label">Provincia</label>
						<div class="col-sm-10">
						  <input type="text" name="provincia" class="form-control" id="inputProv" value="{{$ciudad->provincia}}" readonly><br>
						</div>
						<br>
						<label for="inputYaci" class="col-sm-2 control-label">Tipo Yacimiento</label>
						<div class="col-sm-10">
							<input type="text" name="tipoYacimiento" class="form-control" id="inputYaci" value="{{$ciudad->tipoYacimiento}}" readonly><br>
						</div>
						<br>
						<label for="inputCrono" class="col-sm-2 control-label">Cronología</label>
						<div class="col-sm-10">
						  <textarea name="cronologia" class="form-control" id="inputCrono" rows="6" readonly>{{$ciudad->cronologia}}</textarea><br>
						</div>
						<br>
						<label for="inputLati" class="col-sm-2 control-label">Latitud</label>
						<div class="col-sm-10">
						  <input type="text" name="coord_x" class="form-control" id="inputLati" value="{{$ciudad->coord_x}}" readonly><br>
						</div>
						<label for="inputLong" class="col-sm-2 control-label">Longitud</label>
						<div class="col-sm-10">
						  <input type="text" name="coord_y" class="form-control" id="inputLong" value="{{$ciudad->coord_y}}" readonly><br>
						</div>
						  <br>
						  <br>
                    </form>
                    <br>
                </div>
            </div>
        </div>
</div>
@endsection