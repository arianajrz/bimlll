<script>
    $(document).ready(function() {
		$('select').material_select();
    });
	 
</script>

	<div class="row">
	  <div class="col s12  amber lighten-2">
		<h5 class="center-align">Inventario</h5>
	  </div>
	</div>

	<form class = "col s12 center-align" method="post" action="?controller=User&action=InventarioGeneral">
		<div class = "row">
			<div class = "input-field col s12">
				<table border="1">
					<thead>
						<tr>
							<td>id</td>
							<td>Nombre</td>
							<td>Descripcion</td>
							<td>Precio</td>
							<td>Cantidad</td>
						</tr>
					</thead>
					
					<tbody>
						{foreach $tabla as $variable}
							<tr>
								<td> {$variable['id']} </td>
								<td> {$variable['Nombre']} </td>
								<td> {$variable['Descripcion']} </td>
								<td> {$variable['Precio']} </td>
								<td> {$variable['Cantidad']} </td>
							</tr> 
						{/foreach}
					</tbody>
				</table>

			</div>
		</div>
	</form>