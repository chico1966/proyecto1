@extends('layouts.app')

@section('content')
    <script>
        var map = L.map('map').
        setView([41.66, -4.72],
            14);

        L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
            maxZoom: 18
        }).addTo(map);

        L.control.scale().addTo(map);
        L.marker([41.66, -4.71], {draggable: true}).addTo(map);
    </script>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">CIUDADES DE LA BÉTICA</h3>
                </div>
                <div class="panel-body">
					@if (Auth::check())
					<a href="{{route('crear.ciudad')}}" class="btn btn-primary btn-sm">Nueva Ciudad</a>
					@endif
					<div class="table-responsive">
						<table class="table table-hover">
							<thead>
								<th>Ciudad</th>
								<th>Conventus</th>
								<th>Categoría</th>
								<th>Tipo Yacimiento</th>
								<th>Extensión</th>
								<th>Cronología</th>
							</thead>
							<tbody>
								@foreach($ciudad as $ciudad)
									<tr VALIGN="MIDDLE" >
										<td>{{$ciudad->nombre}}</td>
										<td>{{$ciudad->conventus}}</td>
										<td>{{$ciudad->categoria}}</td>
										<td>{{$ciudad->tipoYacimiento}}</td>
										<td>{{$ciudad->extension}}</td>
										<td>{{$ciudad->cronologia}}</td>
										<td ALIGN="CENTER">
											@if (Auth::check())
												<a href="{{route('mostrar.ciudad', $ciudad->id)}}">Mostrar</a> <br>
												<a href="{{route('editar.ciudad', $ciudad->id)}}">Editar</a> <br>
												<a href="{{route('eliminar.ciudad', $ciudad->id)}}">Eliminar</a> <br>
											@else
												<a href="{{route('mostrar.ciudad', $ciudad->id)}}">Mostrar</a> <br>
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
