@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Agregar Ciudad</h3>
                </div>
                <div class="panel-body">
					<form action="{{route('agregar.ciudad')}}" method="POST">
					  {{ csrf_field() }}
					  <div class="form-group">
						<label for="inputName" class="col-sm-2 control-label">Nombre</label>
						<div class="col-sm-10">
						  <input type="text" name="nombre" class="form-control" id="inputName" placeholder="Nombre de Ciudad">
						</div>
						<br>
						<label for="inputConve" class="col-sm-2 control-label">Conventus al que Pertenece</label>
						<select name="conventus" class="form-control" id="inputConve" style="width:130px">
						  <option>Hispalensis</option>
						  <option>Gaditanus</option>
						  <option>Cordubensis</option>
						  <option>Astigitanus</option>
						 </select>
						<br>					
						<label for="inputCateg" class="col-sm-2 control-label">Categoría de Ciudad</label>
						<select name="categoria" class="form-control" id="inputCateg" style="width:130px">
						  <option>Municipium</option>
						  <option>Coloniae</option>
						 </select>
						<br>
						<label for="inputExten" class="col-sm-2 control-label">Extensión</label>
						<div class="col-sm-10">
						  <input type="number" name="extension" class="form-control" id="inputExten" placeholder="Extensión">
						</div>
						<br>
						<label for="inputLoca" class="col-sm-2 control-label">Localización</label>
						<div class="col-sm-10">
						  <input type="text" name="localizacion" class="form-control" id="inputLoca" placeholder="Localización">
						</div>
						<br>
						<label for="inputMuni" class="col-sm-2 control-label">Municipio</label>
						<div class="col-sm-10">
						  <input type="text" name="municipio" class="form-control" id="inputMuni" placeholder="Municipio">
						</div>
						<br>
						<label for="inputProv" class="col-sm-2 control-label">Provincia</label>
						<div class="col-sm-10">
						  <input type="text" name="provincia" class="form-control" id="inputProv" placeholder="Provincia">
						</div>
						<br>
						<div class="form-group">
							<label for="inputYaci" class="col-sm-2 control-label">Tipo Yacimiento</label>
							<select name="tipoYacimiento" class="form-control" id="inputCateg" style="width:130px">
							  <option>Despoblado</option>
							  <option>Superpuesto</option>
							 </select>
						</div>
						<br>
						<label for="inputCrono" class="col-sm-2 control-label">Cronología</label>
						<div class="col-sm-10">
						  <textarea name="cronologia" class="form-control" id="inputCrono" rows="6"></textarea>
						</div>
						<br>
						<label for="inputLong" class="col-sm-2 control-label">Latitud</label>
						<div class="col-sm-10">
						  <input type="text" name="coord_x" class="form-control" id="inputLong" placeholder="Latitud">
						</div>
						<label for="inputLoca" class="col-sm-2 control-label">Longitud</label>
						<div class="col-sm-10">
						  <input type="text" name="coord_y" class="form-control" id="inputLati" placeholder="Longitud">
						</div>
						<br>
						<br>
					  	<div class="form-group">
						    <div class="col-sm-offset-2 col-sm-10">
						        <button type="submit" class="btn btn-primary">Agregar Ciudad</button>
						    </div>
					    </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection