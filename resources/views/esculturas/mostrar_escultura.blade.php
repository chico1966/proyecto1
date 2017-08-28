@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Escultura de {{$escultura->ciudad}}: {{$escultura->definicion}} - {{$escultura->tipoEscultura}}.</h3>
                </div>
                <div class="panel-body">
					<div align="left">
						<a href="{{route('lista.esculturas', $escultura->ciudad)}}" class="btn btn-primary btn-sm">Esculturas en {{$escultura->ciudad}}</a>
						<a href="{{route('lista.bibliografias', $escultura->id)}}" class="btn btn-primary btn-sm">Bibliografía</a>
					</div>
					<br>
					<form action="{{route('lista.esculturas', $escultura->ciudad)}}" method="GET">
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
						<label for="inputDef" class="col-sm-2 control-label">Definición</label>
						<div class="col-sm-10">
							<input type="text" name="definicion" class="form-control" id="inputDef" VALUE="{{$escultura->definicion}}" readonly>
						</div>
						<br>
						<label for="inputTipEsc" class="col-sm-2 control-label">Tipo Escultura</label>
						<div class="col-sm-10">
						  <input type="text" name="tipoEscultura" class="form-control" id="inputTipEsc" VALUE="{{$escultura->tipoEscultura}}" readonly>
						</div>
						<br>
						<label for="inputProc" class="col-sm-2 control-label">Procedencia</label>
						<div class="col-sm-10">
						  <input type="text" name="procedencia" class="form-control" id="inputProc" VALUE="{{$escultura->procedencia}}" readonly>
						</div>
						<br>
						<label for="inputContex" class="col-sm-2 control-label">Contexto</label>
						<div class="col-sm-10">
						  <input type="text" name="contexto" class="form-control" id="inputContex" VALUE="{{$escultura->contexto}}" readonly>
						</div>
						<br>
						<label for="inputHallaCau" class="col-sm-2 control-label">Hallazgo Causal</label>
						<div class="col-sm-10">
						 <input type="text" name="hallazgoCasual" class="form-control" id="inputHallaCau" VALUE="{{$escultura->hallazgoCasual}}" readonly>
						</div>
						<br>
						<label for="inputlocAct" class="col-sm-2 control-label">Localización Actual</label>
						<div class="col-sm-10">
						 <input type="text" name="localizacioActual" class="form-control" id="inputlocAct" VALUE="{{$escultura->localizacioActual}}" readonly>
						</div>
						<br>
						<label for="inputConser" class="col-sm-2 control-label">Estado Conservación</label>
						<div class="col-sm-10">
						<input type="text" name="estadoConservacion" class="form-control" id="inputConser" VALUE="{{$escultura->estadoConservacion}}" readonly>
						</div>
						<br>
						<label for="inputMat" class="col-sm-2 control-label">Material</label>
						<div class="col-sm-10">
						 <input type="text" name="material" class="form-control" id="inputMat" VALUE="{{$escultura->material}}" readonly>
						</div>
						<br>
						<label for="inputCrono" class="col-sm-2 control-label">Cronología</label>
						<div class="col-sm-10">
						  <textarea name="cronologia" class="form-control" id="inputCrono" rows="6" readonly>{{$escultura->cronologia}}</textarea>
						</div>
						<br>
						<label for="inputDim" class="col-sm-2 control-label">Dimensiones</label>
						<div class="col-sm-10">
						  <input type="text" name="dimensiones" class="form-control" id="inputDim" VALUE="{{$escultura->dimensiones}}" readonly>
						</div>
						  <br>
						<label for="inputRest" class="col-sm-2 control-label">Restaurada</label>
						<div class="col-sm-10">
						 <input type="text" name="restaurada" class="form-control" id="inputRest" VALUE="{{$escultura->restaurada}}" readonly>
						</div>
						<br>
						<label for="inputPoli" class="col-sm-2 control-label">Resto Policromía</label>
						<div class="col-sm-10">
						 <input type="text" name="restoPolicromia" class="form-control" id="inputPoli" VALUE="{{$escultura->restoPolicromia}}" readonly>
						</div>
						<label for="inputPara" class="col-sm-2 control-label">Paralelos</label>
						<div class="col-sm-10">
						 <input type="text" name="paralelos" class="form-control" id="inputPara" VALUE="{{$escultura->paralelos}}" readonly>
						</div>
						<label for="inputGraf" class="col-sm-2 control-label">Información Gráfica</label>
						<div class="col-sm-10">
						 <input type="text" name="informacionGrafica" class="form-control" id="inputGraf" VALUE="{{$escultura->informacionGrafica}}" readonly>
						</div>
						<br>
						<br>

                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection