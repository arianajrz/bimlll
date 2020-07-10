<script>
    $(document).ready(function() {
		$('select').material_select();
    });
	 
</script>

	<div class="row">
	  <div class="col s12   amber lighten-2">
		<h5 class="center-align">Crear Producto</h5>
	  </div>
	</div>

	<form class = "col s12 center-align" method="post" action="?controller=User&action=GuardarInvent">
		<div class = "row">
			<div class = "input-field col s12">
				<i class = "material-icons prefix">local_grocery_store</i>
				<input placeholder = "Nombre" name="nombre"  id = "nombre" type = "text" class = "active validate" required />
				<label for = "nombre">Nombre</label>
			</div>
		</div>
		<div class = "row">
			<div class = "input-field col s12">
				<i class = "material-icons prefix">view_headline</i>
				<input placeholder = "Descripcion" name="descripcion"  id = "descripcion" type = "text" class = "active validate" required />
				<label for = "descripcion">Descripcion</label>
			</div>
		</div>
		<div class = "row">
			<div class = "input-field col s12">
				<i class = "material-icons prefix">local_atm</i>
				<input placeholder = "Precio" name="precio"  id = "precio" type = "text" class = "active validate" required />
				<label for = "precio">Precio</label>
			</div>
		</div>
		<div class = "row">
			<div class = "input-field col s12">
				<i class = "material-icons prefix">add_circle</i>
				<input placeholder = "Cantidad" name="cantidad"  id = "cantidad" type = "text" class = "active validate" required />
				<label for = "cantidad">Cantidad</label>
			</div>
		</div>

		<div class="row">
		  <div class="input-field col s12">
			<input type="submit" value="CREAR" class=" red lighten-4">
		  </div>
		</div>
	</form>