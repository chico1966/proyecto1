@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Actualizar Bibliografia del Elemento {{$bibliografia->id}}</h3>
                </div>
                <div class="panel-body">
					<form action="{{route('actualizar.bibliografia')}}" method="POST">
					  {{ csrf_field() }}
					  <div class="form-group">
						<label for="inputId" class="col-sm-2 control-label">Id Bibliografía</label>
						<div class="col-sm-10">
						 <input type="text" name="id" class="form-control" id="inputId" value="{{$bibliografia->id}}" readonly>
						</div>
						<label for="inputIdElto" class="col-sm-2 control-label">Id Elemento</label>
						<div class="col-sm-10">
						  <input type="text" name="idElemento" class="form-control" id="inputIdElto" value="{{$bibliografia->idElemento}}" readonly>
						</div>
						<br>
						<label for="inputRef" class="col-sm-2 control-label">Referencia</label>
						<div class="col-sm-10">
						  <textarea name="referencia" class="form-control" id="inputRef" rows="6">{{$bibliografia->referencia}}</textarea>
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