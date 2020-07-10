<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-10 21:02:43
  from 'C:\xampp\htdocs\nuevo\bimlll\templates\Inventario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f08bb53952ef5_16065006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39ae14f795b331c0d816c5c88d3ff29ec0700d5f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevo\\bimlll\\templates\\Inventario.tpl',
      1 => 1594407759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f08bb53952ef5_16065006 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    $(document).ready(function() {
		$('select').material_select();
    });
	 
<?php echo '</script'; ?>
>

	<div class="row">
	  <div class="col s12  amber lighten-2">
		<h5 class="center-align">Inventario</h5>
	  </div>
	</div>

	<form class = "col s12 center-align" method="post" action="?controller=User&action=Inventario General">
		<div class = "row">
			<div class = "input-field col s12">
				<table border="1">
					<tr>
						<td>id</td>
						<td>Nombre</td>
						<td>Descrpcion</td>
						<td>Precio</td>
						<td>Cantidad</td>
					</tr>
					
						<tr>
							<td><?php echo '<?php ';?>
echo $mostrar['id'] <?php echo '?>';?>
</td>
							<td><?php echo '<?php ';?>
echo $mostrar['Nombre'] <?php echo '?>';?>
</td>
							<td><?php echo '<?php ';?>
echo $mostrar['Descricion'] <?php echo '?>';?>
</td>
							<td><?php echo '<?php ';?>
echo $mostrar['Precio'] <?php echo '?>';?>
</td>
							<td><?php echo '<?php ';?>
echo $mostrar['Cantidad'] <?php echo '?>';?>
</td>
						</tr> 
					
				</table>

			</div>
		</div>
	</form><?php }
}
