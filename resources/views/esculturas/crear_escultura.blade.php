@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Agregar Escultura</h3>
                </div>
                <div class="panel-body">
					<form action="{{route('agregar.escultura')}}" method="POST">
					  {{ csrf_field() }}
					  <div class="form-group">
						<label for="inputCiudad" class="col-sm-2 control-label">Ciudad</label>
						<div class="col-sm-10">
						  <input type="text" name="ciudad" class="form-control" id="inputCiudad" value="{{$ciudad}}" readonly>
						</div>
						<br>
						<div class="form-group">
						 <label for="inputDef" class="col-sm-2 control-label">Definición</label>
						 <select name="definicion" class="form-control" id="inputDef" style="width:130px">
						  <option>Friso</option>
						  <option>Thoacato</option>
						  <option>Ecuestre</option>
						  <option>Busto</option>
						 </select>
						</div>
						<br>
						<label for="inputTipEsc" class="col-sm-2 control-label">Tipo Escultura</label>
						<div class="col-sm-10">
						  <input type="text" name="tipoEscultura" class="form-control" id="inputTipEsc" placeholder="Tipo Escultura">
						</div>
						<br>
						<label for="inputProc" class="col-sm-2 control-label">Procedencia</label>
						<div class="col-sm-10">
						  <input type="text" name="procedencia" class="form-control" id="inputProc" placeholder="Procedencia">
						</div>
						<br>
						<label for="inputContex" class="col-sm-2 control-label">Contexto</label>
						<div class="col-sm-10">
						  <input type="text" name="contexto" class="form-control" id="inputContex" placeholder="Contexto">
						</div>
						<br>
						<label for="inputHallaCau" class="col-sm-2 control-label">Hallazgo Causal</label>
						<div class="col-sm-10">
						 <input type="text" name="hallazgoCasual" class="form-control" id="inputHallaCau" placeholder="Hallazgo Causal">
						</div>
						<br>
						<label for="inputlocAct" class="col-sm-2 control-label">Localización Actual</label>
						<div class="col-sm-10">
						 <input type="text" name="localizacioActual" class="form-control" id="inputlocAct" placeholder="Localización Actual">
						</div>
						<br>
						<label for="inputConser" class="col-sm-2 control-label">Estado Conservación</label>
						<div class="col-sm-10">
						<input type="text" name="estadoConservacion" class="form-control" id="inputConser" placeholder="Estado de Conservación">
						</div>
						<br>
						<label for="inputMat" class="col-sm-2 control-label">Material</label>
						<div class="col-sm-10">
						 <input type="text" name="material" class="form-control" id="inputMat" placeholder="Material">
						</div>
						<br>
						<label for="inputCrono" class="col-sm-2 control-label">Cronología</label>
						<div class="col-sm-10">
						  <textarea name="cronologia" class="form-control" id="inputCrono" rows="6"></textarea>
						</div>
						<br>
						<label for="inputDim" class="col-sm-2 control-label">Dimensiones</label>
						<div class="col-sm-10">
						  <input type="text" name="dimensiones" class="form-control" id="inputDim" placeholder="Dmensiones">
						</div>
						  <br>
						<label for="inputRest" class="col-sm-2 control-label">Restaurada</label>
						<div class="form-group">
						 <select name="restaurada" class="form-control" id="inputRest" style="width:130px">
						  <option>True</option>
						  <option>False</option>
						 </select>
						</div>
						<br>
						<label for="inputPoli" class="col-sm-2 control-label">Resto Policromía</label>
						<div class="col-sm-10">
						 <input type="text" name="restoPolicromia" class="form-control" id="inputPoli" placeholder="Resto Policromía">
						</div>
						<label for="inputPara" class="col-sm-2 control-label">Paralelos</label>
						<div class="col-sm-10">
						 <input type="text" name="paralelos" class="form-control" id="inputPara" placeholder="Paralelos">
						</div>
						<label for="inputGraf" class="col-sm-2 control-label">Información Gráfica</label>
						<div class="col-sm-10">
						 <input type="text" name="informacionGrafica" class="form-control" id="inputGraf" placeholder="Información Gráfica">
						</div>
						<br>
						<br>
					    <div class="form-group">
						    <div class="col-sm-offset-2 col-sm-10">
						        <button type="submit" class="btn btn-primary">Agregar Escultura</button>
						    </div>
					    </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection