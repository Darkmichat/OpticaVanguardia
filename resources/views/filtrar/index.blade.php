@extends('admin.layout')
@section('content')
@include('registros.create')
@include('alerts.success')
@include('alerts.warning')

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de  Registros <a href=""data-target="#modalcreate" data-toggle="modal"><button class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i> Nuevo </button></a></h3>

				{{ Form::open(['route' => 'filtrar.index', 'method' => 'GET', 'class' => 'form-inline pull-left']) }}
		                

		             

		                 <select type="int" name="estado" id="estado" class="form-control" required="Campo Requerido">

						    	<option value="">--Seleccione--</option>
						    	<option value="VD">VD</option>
						    	<option value="MO">MO</option>
						    	<option value="CE">CE</option>
				   		 </select>

		                 <div class="form-group">
		               {{ Form::date('primer_dia', null, ['class' => 'form-control']) }}
		                </div>	

		                 <div class="form-group">
		               {{ Form::date('ultimo_dia', null, ['class' => 'form-control']) }}
		                </div>
		            
		            <div class="form-group">
		                 <button type="submit" class="btn btn-default">
		                       <span class="glyphicon glyphicon-search"></span>
		                 </button>
		           	</div>
		            {{ Form::close() }}

		</div>
	

<div class="container">
	<div class="row">
		<div class="col-lg-11 col-md-8 col-sm-8 col-xs-8	">
			<div class="table-responsive">
				
				<table class="table table-stripped table-bordered table-condensed table-hover">
					
					<thead>
						<th>O T</th>
						<th>Fecha CE</th>
						<th>Nombre</th>
						<th>Rut</th>
						<th>Fono</th>
						<th>E/Pago</th>
						<th>E/Transac</th>
						<th>Valor</th>

					</thead>
					@foreach($registros as $registro)
					<tr>
						<td>{{ $registro->ot }}</td>
						<td>{{ $registro->updated_at }}</td>
						<td>{{ $registro->nombre_usuario }}</td>
						<td>{{ $registro->rut }}</td>
						<td>{{ $registro->fono }}</td>
						<td>{{ $registro->estado_pago }}</td>
						<td>{{ $registro->estado_tran }}</td>
						<td>{{ number_format($registro->valor_pagar)}}</td>
						

					
					</tr>
					@include('registros.show')
					@include('registros.modal')
					@include('registros.edit')
					@endforeach
				</table>
			
		</div>
	</div>
</div>
</div>



@endsection