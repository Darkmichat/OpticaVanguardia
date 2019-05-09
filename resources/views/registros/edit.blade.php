<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-edit-{{$registro->id}}">
	{!!Form::model($registro,['method'=>'PATCH', 'route'=>['registro.update',$registro->id]])!!}
	{{ csrf_field() }}
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" 
				aria-label="Close">
                     <span aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i></span>
                </button>
                <h3 class="modal-title" align="center">Editar Registro</h3>
			</div>
			<div class="modal-body">
				<div class="form-group"> 

					<label for ="">OT</label>
				    <input value="{{$registro->ot}}" type="text" name="ot" class="form-control" required="">

				    
				    <label for ="">Nombre del Usuario</label>
				    <input value="{{$registro->nombre_usuario}}" type="text" name="nombre_usuario" class="form-control" required="">

				     <label for ="">Rut</label>
				    <input value="{{$registro->rut}}" type="text" name="rut" class="form-control" required="">

				    <label for ="">Fono</label>
				    <input value="{{$registro->fono}}" type="text" name="fono" class="form-control" required="">

				    <label for ="">Fecha receta</label>
				    <input value="{{$registro->fecha_receta}}" type="date" name="fecha_receta" class="form-control" required="">

				    <label for ="">Monto total</label>
				    <input  type="text"  name="valor_pagar" class="form-control" value="{{$registro->valor_pagar}}">
				   
				    <label for ="">Estado del pago</label>
				    <select type="int" name="estado_pago" id="estado_pago" class="form-control" required="Campo Requerido">

				    	<option value="">--Seleccione--</option>
				    	<option value="Debe">Debe</option>
				    	<option value="Pagado">Pagado</option>
				    </select>

				     <label for ="">Estado de transicion</label>
				    <select type="int" name="estado_tran" id="estado_tran" class="form-control" required="Campo Requerido">

				    	<option value="">--Seleccione--</option>
				    	<option value="VD">VD</option>
				    	<option value="MO">MO</option>
				    	<option value="CE">CE</option>
				    </select>

				</div>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-primary">Actualizar</button>
			</div>
		</div>
	</div>
	{{Form::Close()}}

</div> 