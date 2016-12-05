
<div class="modal fade" id="<?php echo $modal_e; ?>">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Eliminar Nota de Salida 
				<?php echo $fila->serie_doc.' - '.$fila->doc; ?>
					
				</h4>
			</div>
			<form action="../procesos/eliminar-nota-salida.php" method="POST">
			<div class="modal-body">
			¿Esta seguro de eliminar la nota de salida <?php echo $fila->serie_doc.' - '.$fila->doc; ?> ?
			<input type="hidden" name="documento" value="<?php echo $fila->documento; ?>">
			<input type="hidden" name="tipo" value="NS">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-danger">Eliminar</button>
			</div>
			</form>
		</div>
	</div>
</div>