{include file='Cabeceras/header.tpl' titulo='Home'}
	{if isset($e)}
		{if isset($men)}
			<div align="center">
				<h6>{$men}</h6>
			</div>
		{/if}

		<div class="row">
			<div class="col s4">
			
				{if $tipo=="Administrador"}
					{include file='MenuAdmin.tpl'}
				{else}
					{include file='MenuTrab.tpl'}
				{/if}
			</div>

			<div class="col s8">
				{if $vista=="CrearUsuario"}
					{include file='CrearUsuario.tpl'}

				{else if $vista == "CrearProducto"}
					{include file='CrearProducto.tpl'}
					
				{else if $vista == "Inventario General"}
					{include file='Inventario.tpl'}

					{else if $vista == ""}

					{else if $vista == ""}

					{else if $vista == ""}

					{else}
						<i class="large material-icons">touch_app</i>
					{/if}

			</div>

		</div>
	{/if}
{include file='Cabeceras/footer.tpl'}
