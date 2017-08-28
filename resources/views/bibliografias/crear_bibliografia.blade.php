@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Agregar Bibliografia al Elemento {{$idElemento}}</h3>
                </div>
                <div class="panel-body">
					<form action="{{route('agregar.bibliografia')}}" method="POST">
					  {{ csrf_field() }}
					  <div class="form-group">
						<label for="inputIdElto" class="col-sm-2 control-label">Id Elemento</label>
						<div class="col-sm-10">
						  <input type="text" name="idElemento" class="form-control" id="inputIdElto" value="{{$idElemento}}">
						</div>
						<br>
						<label for="inputRef" class="col-sm-2 control-label">Referencia</label>
						<div class="col-sm-10">
						  <textarea name="referencia" class="form-control" id="inputRef" rows="6">A�adir Referencia</textarea>
						</div>
						<br>
						<br>
					    <div class="form-group">
						    <div class="col-sm-offset-2 col-sm-10">
						        <button type="submit" class="btn btn-primary">Agregar Bibliograf�a</button>
						    </div>
					    </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection