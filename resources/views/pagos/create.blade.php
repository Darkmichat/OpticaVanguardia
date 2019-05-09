<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modalcreate">
	{{!!Form::open(['url'=>'pago','method'=>'POST' , 'name'=> 'FormularioPagosCreate'])!!}
	{{ csrf_field() }}
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" 
				aria-label="Close">
                     <span aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i></span>
                </button>
                <h3 class="modal-title" align="center">Ingresar Nuevo pago</h3>
			</div>
			<div class="modal-body">
				<div class="form-group"> 

					<label> Nombre de la persona </label>
            		<select name="registro_id" class="form-control" >
            			<option value="">--Seleccione--</option>
            			@foreach ($registros as $registro)
            		<option value="{{$registro->id}}"->{{$registro->nombre_usuario}}</option>
            			@endforeach
            		</select>


					<label for ="">Valor en efectivo</label>
				    <input type="text" name="valor_efectivo" class="form-control"  required="Campo Requerido">

				    <label for ="">Valor en electronico</label>
				    <input type="text" name="valor_electronico" class="form-control"  required="Campo Requerido">

				

				    

	</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-primary">Confirmar</button>
			</div>
		</div>
	</div>
	{{Form::Close()}}

</div>  


