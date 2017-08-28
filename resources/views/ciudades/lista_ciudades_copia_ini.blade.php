@extends('layouts.app')

@section('content')

   <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">CIUDADES DE LA BÉTICA</h3>
                </div>
                <div class="panel-body">
					<a href="{{route('crear.ciudad')}}" class="btn btn-primary btn-sm">Nueva Ciudad</a>
					<div class="table-responsive">
						<table class="table table-hover">
							<thead>
								<th>Ciudad</th>
								<th>Conventus</th>
								<th>Categoría</th>
								<th>Tipo Yacimiento</th>
								<th>Extensión</th>
								<th>Cronología</th>
								<th>Escultura</th>
								<th>Arq. Privada</th>
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
											@if ($ciudad->escultura)
													{{"X"}}
											@else 
													{{"O"}}
											@endif
										</td>
										<td ALIGN="CENTER">
											@if ($ciudad->arquitecturaPrivada)
													{{"X"}}
											@else 
													{{"O"}}
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