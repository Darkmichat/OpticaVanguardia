<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modalcreate">
	{{!!Form::open(['url'=>'registro','method'=>'POST' , 'name'=> 'FormularioRegistrosCreate'])!!}
	{{ csrf_field() }}
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" 
				aria-label="Close">
                     <span aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i></span>
                </button>
                <h3 class="modal-title" align="center">Ingresar Nuevo registro</h3>
			</div>
			<div class="modal-body">
				<div class="form-group"> 

					<label for ="">OT</label>
				    <input type="text" name="ot" class="form-control"  required="Campo Requerido">

				    <label for ="">Nombre</label>
				    <input type="text" name="nombre_usuario" class="form-control"  required="Campo Requerido">

				    <label for ="">Rut</label>
				    <input type="text" name="rut" class="form-control" id="rut"   required="Campo Requerido">

				    <label for ="">Fono</label>
				    <input type="text" name="fono" class="form-control"  required="Campo Requerido">

				    <label for ="">Fecha Receta</label>
				    <input type="date" name="fecha_receta" class="form-control"  required="Campo Requerido">

				    <label for ="">Monto Total</label>
				    <input type="text" name="valor_pagar" class="form-control"  required="Campo Requerido">

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
				<button type="submit" class="btn btn-primary">Confirmar</button>
			</div>
		</div>
	</div>
	{{Form::Close()}}

</div>  





