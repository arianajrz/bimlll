<script>
    $(document).ready(function() {
		$('select').material_select();
    });
	 
</script>

	<div class="row">
	  <div class="col s12  amber lighten-2">
		<h5 class="center-align">Crear Usuario</h5>
	  </div>
	</div>

	<form class = "col s12 center-align" method="post" action="?controller=User&action=GuardarUsuario">
		<div class = "row">
			<div class = "input-field col s12">
				<i class = "material-icons prefix">person_add</i>
				<input placeholder = "Nombre de Usuario" name="nombre"  id = "nombre" type = "text" class = "active validate" required />
				<label for = "nombre">Nombre</label>
			</div>
		</div>
		<div class = "row">
			<div class = "input-field col s12">
				<i class = "material-icons prefix">persona</i>
				<input placeholder = "Apellido de Usuario" name="apellido"  id = "apellido" type = "text" class = "active validate" required />
				<label for = "apellido">Apellido</label>
			</div>
		</div>

		<div class = "row">
			<div class = "input-field col s12">
				<i class = "material-icons prefix">person_pin</i>
				<input placeholder = "Nombre de Usuario" name="usuario"  id = "usuario" type = "text" class = "active validate" required />
				<label for = "usuario">Usuario</label>
			</div>
		</div>

		<div class = "row">
			<div class = "file-field input-field col s12">
				<div class="btn">
					<span>Foto de Perfil</span>
					<input type="file" id="foto" name="foto">
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" type="text" placeholder="Foto de perfil">
				</div>
			</div>
		</div>

		<div class = "row">
			<div class = "input-field col s12">
				<i class = "material-icons prefix">date_range</i>
				<label for="Icon_date">Fecha de Nacimiento</label>
				<input type="date" name="fecha" placeholder = "Fecha" class="datepicker" id="date">
			</div>
		</div>

		<div class="row">
			<div class = "input-field col s12">
				<label for = "tipo">Tipo de usuario</label>
				<i class = "material-icons prefix">work</i>
			</div>
			<div class = "input-field col s12">
				   <select class = "browser-default" name="tipo" id="tipo" >
					  <option value = "Trabajador">Trabajador</option>
					  <option value = "Administrador">Administrador</option>
				   </select>
			</div>
		</div>

		<div class = "row">
			<div class = "input-field col s12">
				<i class = "material-icons prefix">vpn_key</i>
				<input  name="pass"  id = "pass" type = "password" class = "active validate" required />
				<label for = "pass">Password</label>
			</div>
		</div>

		<div class = "row">
			<div class = "input-field col s12">
				<i class = "material-icons prefix">vpn_key</i>
				<input placeholder = "Password de Usuario" name="RePass"  id = "RePass" type = "password" class = "active validate" required />
				<label for = "RePass">Rep.Password</label>
			</div>
		</div>
		

		<div class="row">
		  <div class="input-field col s12">
			<input type="submit" value="CREAR" class="red lighten-4">
		  </div>
		</div>
	</form>