@extends('admin.layout')
@section('content')
@include('registros.create')
@include('alerts.success')

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<?php
	$suma= 0;
	$suma2= 0;
?>
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Filtrar por fecha </h3>
				{{ Form::open(['route' => 'cierre.index', 'method' => 'GET', 'class' => 'form-inline pull-center']) }}
		                <div class="form-group">
		               {{ Form::date('updated_at', null, ['class' => 'form-control', 'placeholder' => 'Ingrese fecha']) }}
		                </div>

		            <form action="#" method="get" class="sidebar-form">
		            <div class="form-group">
		                 <button type="submit" class="btn btn-default">
		                       <span class="fa fa-search"></span>
		                 </button>
		           	</div>
		            {{ Form::close() }}

			
		</div>
	

<div class="container">
	<div class="row">
		<div class="col-lg-11 col-md-8 col-sm-8 col-xs-8	">
			<div class="table-responsive">
				<div class="scrollable">
					<table class="table table-stripped table-bordered table-condensed table-hover">
						
						<thead>
							<th>Nombre</th>
							<th>Fono</th>
							<th>Rut</th>
							<th>F/Ingreso</th>
							<th>F/Act</th>
							<th>Total</th>
							<th>P/efec</th>
							<th>P/elec</th>
							<th>Deuda</th>
							<th>Estado</th>
						</thead>
						@foreach($registros as $registro)
						<tr>
							<td>{{ $registro->nombre_usuario}}</td>
							<td>{{ $registro->fono}}</td>
							<td>{{ $registro->rut}}</td>
							<td>{{ $registro->created_at}}</td>
							<td>{{ $registro->updated_at}}</td>
							<td>{{ number_format($registro->valor_pagar)}}</td>
							<td>{{ number_format($registro->valor_efectivo) }}</td>
							<td>{{ number_format($registro->valor_electronico)}}</td>
							<td>{{ number_format($registro->deuda)}}</td>
							<td>{{ $registro->estado }}</td>

							<td>
								<?php $suma+=  $registro->valor_efectivo; ?>
								<?php $suma2+=  $registro->valor_electronico; ?>
							</td>
						</tr>
						@endforeach

							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>	
								<td><th>Efe/total $<?php echo number_format($suma); ?> </th></td>
								<th>Ele/total $<?php echo number_format($suma2); ?> </th>
							</tr>
							

					</table>
					<h1>Firma</h1> 
					<h1>_______________</h1>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection