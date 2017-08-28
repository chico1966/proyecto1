@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">CIUDAD de LA BÉtiCA</h3>
                </div>
                <div class="panel-body">
					<form action="{{route('actualizar.ciudad')}}" method="POST">
					  {{ csrf_field() }}
						<label for="inputId" class="col-sm-2 control-label">Id</label>
						<div class="col-sm-10">
							<input type="text" name="id" class="form-control" id="inputId" VALUE="{{$ciudad->id}}" readonly><br>
						</div>
						<label for="inputName" class="col-sm-2 control-label">Ciudad</label>
						<div class="col-sm-10">
							<input type="text" name="nombre" class="form-control" id="inputName" VALUE="{{$ciudad->nombre}}"><br>
						</div>
						<br>
						<label for="inputConve" class="col-sm-2 control-label">Conventus al que Pertenece</label>
						 <div class="col-sm-10">
							  <input type="text" name="conventus" class="form-control" id="inputConve" VALUE="{{$ciudad->conventus}}"><br>
						 </div>
						<br>					
						<label for="inputCateg" class="col-sm-2 control-label">Categoría de Ciudad</label>
						  <div class="col-sm-10">
							  <input type="text" name="categoria" class="form-control" id="inputCateg" value="{{$ciudad->categoria}}"><br>
						  </div>
						<br>
						<label for="inputExten" class="col-sm-2 control-label">Extensión</label>
						<div class="col-sm-10">
						  <input type="number" name="extension" class="form-control" id="inputExten" value="{{$ciudad->extension}}"><br>
						</div>
						<br>
						<label for="inputLoca" class="col-sm-2 control-label">Localización</label>
						<div class="col-sm-10">
						  <input type="text" name="localizacion" class="form-control" id="inputLoca" value="{{$ciudad->localizacion}}"><br>
						</div>
						<br>
						<label for="inputMuni" class="col-sm-2 control-label">Municipio</label>
						<div class="col-sm-10">
						  <input type="text" name="municipio" class="form-control" id="inputMuni" value="{{$ciudad->municipio}}"><br>
						</div>
						<br>
						<label for="inputProv" class="col-sm-2 control-label">Provincia</label>
						<div class="col-sm-10">
						  <input type="text" name="provincia" class="form-control" id="inputProv" value="{{$ciudad->provincia}}"><br>
						</div>
						<br>
						<label for="inputYaci" class="col-sm-2 control-label">Tipo Yacimiento</label>
						<div class="col-sm-10">
							<input type="text" name="tipoYacimiento" class="form-control" id="inputYaci" value="{{$ciudad->tipoYacimiento}}"><br>
						</div>
						<br>
						<label for="inputCrono" class="col-sm-2 control-label">Cronología</label>
						<div class="col-sm-10">
						  <textarea name="cronologia" class="form-control" id="inputCrono" rows="6">{{$ciudad->cronologia}}</textarea><br>
						</div>
						<br>
						<label for="inputLati" class="col-sm-2 control-label">Latitud</label>
						<div class="col-sm-10">
						  <input type="text" name="coord_x" class="form-control" id="inputLati" value="{{$ciudad->coord_x}}"><br>
						</div>
						<label for="inputLong" class="col-sm-2 control-label">Longitud</label>
						<div class="col-sm-10">
						  <input type="text" name="coord_y" class="form-control" id="inputLong" value="{{$ciudad->coord_y}}"><br>
						</div>
						  <br>
						  <br>
					    <div class="form-group">
						    <div class="col-sm-offset-2 col-sm-10">
						        <button type="submit" class="btn btn-primary">Guardar</button>
						    </div>
					    </div>

                    </form>
                </div>
            </div>
        </div>
</div>
@endsection