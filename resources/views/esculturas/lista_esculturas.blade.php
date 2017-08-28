@extends('layouts.app')

@section('content')
     <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Esculturas en {{$ciudad}}</h3>
                </div>
                <div class="panel-body">
					@if (Auth::check())
					<a href="{{route('crear.escultura',$ciudad)}}" class="btn btn-primary btn-sm">Nueva Escultura</a>
					@endif
					<a href="{{route('mostrar.ciudad_nom',$ciudad)}}" class="btn btn-primary btn-sm">Volver a {{$ciudad}}</a>
					<div class="table-responsive">
						<table class="table table-hover">
							<thead>
								<th>Id</th>
								<th>Definición</th>
								<th>Material</th>
								<th>Contexto</th>
								<th>Tipo de Escultura</th>
								<th>Cronología</th>
							</thead>
							<tbody>
								@foreach($esculturas as $escultura)
									<tr VALIGN="MIDDLE" >
										<td>{{$escultura->id}}</td>
										<td>{{$escultura->definicion}}</td>
										<td>{{$escultura->material}}</td>
										<td>{{$escultura->contexto}}</td>
										<td>{{$escultura->tipoEscultura}}</td>
										<td>{{$escultura->cronologia}}</td>
										<td ALIGN="CENTER">
											@if (Auth::check())
												<a href="{{route('mostrar.escultura', $escultura->id)}}">Mostrar</a><br>
												<a href="{{route('editar.escultura', $escultura->id)}}">Editar</a><br>
												<a href="{{route('eliminar.escultura', $escultura->id)}}">Eliminar</a><br>
											@else
												<a href="{{route('mostrar.escultura', $escultura->id)}}">Mostrar</a><br>
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
