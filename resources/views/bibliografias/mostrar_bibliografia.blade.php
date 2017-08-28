@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Referencia Bibliográfica del Elemento {{$bibliografia->idElemento}}</h3>
                </div>
                <div class="panel-body">
					<!-- <a href="{{route('lista.bibliografias', $bibliografia->idElemento)}}" class="btn btn-primary btn-sm">&laquo; Volver a la Referencias</a> -->
					<a href="javascript:window.close();" class="btn btn-primary btn-sm">Cerrar Referencia</a>
					<br>
					<br>
					<form action="{{route('lista.bibliografias', $bibliografia->idElemento)}}" method="GET">
					  {{ csrf_field() }}
					  <div class="form-group">
						<label for="inputIdElto" class="col-sm-2 control-label">Id Bibliografía</label>
						<div class="col-sm-10">
						 <input type="text" name="idElemento" class="form-control" id="inputIdElto" value="{{$bibliografia->id}}" readonly>
						</div>
						<label for="inputIdElto" class="col-sm-2 control-label">Id Elemento</label>
						<div class="col-sm-10">
						  <input type="text" name="idElemento" class="form-control" id="inputIdElto" value="{{$bibliografia->idElemento}}" readonly>
						</div>
						<br>
						<label for="inputRef" class="col-sm-2 control-label">Referencia</label>
						<div class="col-sm-10">
						  <textarea name="referencia" class="form-control" id="inputRef" rows="6" readonly>{{$bibliografia->referencia}}</textarea>
						</div>
                      </div>
						<br>
						<br>
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection