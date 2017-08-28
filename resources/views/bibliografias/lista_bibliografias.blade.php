@extends('layouts.app')

@section('content')
     <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Bibliografía del Elemento: {{$idElemento}}</h3>
                </div>
                <div class="panel-body">
					@if (Auth::check())
					<a href="{{route('crear.bibliografia',$idElemento)}}" class="btn btn-primary btn-sm" target="_blank">Nueva Bibliografía</a>
					@endif
					<a href="javascript:window.history.back();" class="btn btn-primary btn-sm">&laquo; Volver a Elemento</a>
					<a href="javascript:location.reload()" class="btn btn-primary btn-sm">Actualizar Referencias</a>
					<div class="table-responsive">
						<table class="table table-hover">
							<thead>
								<th>Id</th>
								<th>Id Elemento</th>
								<th>Referencia</th>
								</thead>
							<tbody>
								@foreach($bibliografias as $bibliografia)
									<tr VALIGN="MIDDLE" >
										<td>{{$bibliografia->id}}</td>
										<td>{{$bibliografia->idElemento}}</td>
										<td>{{$bibliografia->referencia}}</td>
										<td ALIGN="CENTER">
											@if (Auth::check())
												<a href="{{route('mostrar.bibliografia', $bibliografia->id)}}" target="_blank">Mostrar</a><br>
												<a href="{{route('editar.bibliografia', $bibliografia->id)}}" target="_blank">Editar</a><br>
												<a href="{{route('eliminar.bibliografia', $bibliografia->id)}}">Eliminar</a><br>
											@else
												<a href="{{route('mostrar.bibliografia', $bibliografia->id)}}" target="_blank">Mostrar</a><br>
											@endif

										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>   
                </div>
            </div>
        </div>
    </div>
@endsection
