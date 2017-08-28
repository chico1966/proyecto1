@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Actualizar Escultura</h3>
                </div>
                <div class="panel-body">
					<form action="{{route('actualizar.escultura')}}" method="POST">
					  {{ csrf_field() }}
					  <div class="form-group">
						<label for="inputId" class="col-sm-2 control-label">Id</label>
						<div class="col-sm-10">
						 <input type="text" name="id" class="form-control" id="inputId" VALUE="{{$escultura->id}}" readonly>
						</div>
						<br>
						<label for="inputCiudad" class="col-sm-2 control-label">Ciudad</label>
						<div class="col-sm-10">
						  <input type="text" name="ciudad" class="form-control" id="inputCiudad" VALUE="{{$escultura->ciudad}}" readonly>
						</div>
						<br>
						<div class="form-group">
						 <label for="inputDef" class="col-sm-2 control-label">Definición</label>
						 <select name="definicion" class="form-control" id="inputDef" style="width:130px" VALUE="{{$escultura->definicion}}">
						  <option>Friso</option>
						  <option>Thoacato</option>
						  <option>Ecuestre</option>
						  <option>Busto</option>
						 </select>
						</div>
						<br>
						<label for="inputTipEsc" class="col-sm-2 control-label">Tipo Escultura</label>
						<div class="col-sm-10">
						  <input type="text" name="tipoEscultura" class="form-control" id="inputTipEsc" VALUE="{{$escultura->tipoEscultura}}">
						</div>
						<br>
						<label for="inputProc" class="col-sm-2 control-label">Procedencia</label>
						<div class="col-sm-10">
						  <input type="text" name="procedencia" class="form-control" id="inputProc" VALUE="{{$escultura->procedencia}}">
						</div>
						<br>
						<label for="inputContex" class="col-sm-2 control-label">Contexto</label>
						<div class="col-sm-10">
						  <input type="text" name="contexto" class="form-control" id="inputContex" VALUE="{{$escultura->contexto}}">
						</div>
						<br>
						<label for="inputHallaCau" class="col-sm-2 control-label">Hallazgo Causal</label>
						<div class="col-sm-10">
						 <input type="text" name="hallazgoCasual" class="form-control" id="inputHallaCau" VALUE="{{$escultura->hallazgoCasual}}">
						</div>
						<br>
						<label for="inputlocAct" class="col-sm-2 control-label">Localización Actual</label>
						<div class="col-sm-10">
						 <input type="text" name="localizacioActual" class="form-control" id="inputlocAct" VALUE="{{$escultura->localizacioActual}}">
						</div>
						<br>
						<label for="inputConser" class="col-sm-2 control-label">Estado Conservación</label>
						<div class="col-sm-10">
						<input type="text" name="estadoConservacion" class="form-control" id="inputConser" VALUE="{{$escultura->estadoConservacion}}">
						</div>
						<br>
						<label for="inputMat" class="col-sm-2 control-label">Material</label>
						<div class="col-sm-10">
						 <input type="text" name="material" class="form-control" id="inputMat" VALUE="{{$escultura->material}}">
						</div>
						<br>
						<label for="inputCrono" class="col-sm-2 control-label">Cronología</label>
						<div class="col-sm-10">
						  <textarea name="cronologia" class="form-control" id="inputCrono" rows="6">{{$escultura->cronologia}}</textarea>
						</div>
						<br>
						<label for="inputDim" class="col-sm-2 control-label">Dimensiones</label>
						<div class="col-sm-10">
						  <input type="text" name="dimensiones" class="form-control" id="inputDim" VALUE="{{$escultura->dimensiones}}">
						</div>
						  <br>
						<label for="inputRest" class="col-sm-2 control-label">Restaurada</label>
						<div class="form-group">
						 <select name="restaurada" class="form-control" id="inputRest" style="width:130px" VALUE="{{$escultura->restaurada}}">
						  <option>True</option>
						  <option>False</option>
						 </select>
						</div>
						<br>
						<label for="inputPoli" class="col-sm-2 control-label">Resto Policromía</label>
						<div class="col-sm-10">
						 <input type="text" name="restoPolicromia" class="form-control" id="inputPoli" VALUE="{{$escultura->restoPolicromia}}">
						</div>
						<label for="inputPara" class="col-sm-2 control-label">Paralelos</label>
						<div class="col-sm-10">
						 <input type="text" name="paralelos" class="form-control" id="inputPara" VALUE="{{$escultura->paralelos}}">
						</div>
						<label for="inputGraf" class="col-sm-2 control-label">Información Gráfica</label>
						<div class="col-sm-10">
						 <input type="text" name="informacionGrafica" class="form-control" id="inputGraf" VALUE="{{$escultura->informacionGrafica}}">
						</div>
						<br>
						<br>
					    <div class="form-group">
						    <div class="col-sm-offset-2 col-sm-10">
						        <button type="submit" class="btn btn-primary">Guardar</button>
						    </div>
					    </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection