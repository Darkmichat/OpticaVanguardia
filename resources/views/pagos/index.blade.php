@extends('admin.layout')
@section('content')
@include('pagos.create')
@include('alerts.success')
@include('alerts.warning')

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<?php
	$suma= 0;
	$suma2= 0;
?>
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de  Pagos <a href=""data-target="#modalcreate" data-toggle="modal"><button class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i> Nuevo </button></a></h3>

				{{ Form::model(Request::all(), ['route' => 'pago.index', 'method' => 'GET', 'class' => 'form-inline pull-left']) }}
		                

		                <div class="form-group">
		               {{ Form::date('created_at', null, ['class' => 'form-control' ,'placeholder' => 'Ingrese id']) }}
		                </div>


		                
            		<select type="int" name="registro_id" id="registro_id" class="form-control" >
	            		<option value="">--Seleccione--</option>

	            		@foreach ($registros as $registro)
	            		<option value="{{$registro->id}}"->{{$registro->nombre_usuario}}</option>
	            		@endforeach
            		</select>
      		

		                
		                 
		            
		            <div class="form-group">
		                 <button type="submit" class="btn btn-default">
		                       <span class="glyphicon glyphicon-search"></span>
		                 </button>
		           	</div>
		            {{ Form::close() }}

	</div>
	
</div>
<div class="container">
	<div class="row">
		<div class="col-lg-9 col-md-8 col-sm-8 col-xs-8	">
			<div class="table-responsive">
				
				<table class="table table-stripped table-bordered table-condensed table-hover">
					
					<thead>
						<th>OT</th>
						<th>Nombre</th>
						<th>F/Ingreso</th>
						<th>F/Act</th>
						<th>Pago efectivo</th>
						<th>Pago electronico</th>
						<th>Monto total</th>


					</thead>
					@foreach($pagos as $pago)
					<tr>
						<td>{{ $pago->registro->ot}}</td>
						<td>{{ $pago->registro->nombre_usuario}}</td>
						<td>{{ $pago->created_at}}</td>
						<td>{{ $pago->updated_at}}</td>
						<td>${{ $pago->valor_efectivo }}</td>
						<td>${{ $pago->valor_electronico }}</td>
						<td>${{ $pago->registro->valor_pagar }}</td>
						<td>
							<?php $suma+=  $pago->valor_efectivo; ?>
							<?php $suma2+=  $pago->valor_electronico; ?>
						</td>
					</tr>
					
					@endforeach
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td><th>Efe/total $<?php echo number_format($suma); ?> </th></td>
						<th>Ele/total $<?php echo number_format($suma2); ?> </th>
					</tr>
				</table>
				{{ $pagos->appends(Request::only(['created_at']))->render() }}
			</div>
		</div>
	</div>
</div>
@endsection