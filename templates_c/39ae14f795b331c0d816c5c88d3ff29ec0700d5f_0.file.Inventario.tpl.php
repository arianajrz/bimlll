<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-13 19:57:13
  from 'C:\xampp\htdocs\nuevo\bimlll\templates\Inventario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f0ca079adfcb2_64100024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39ae14f795b331c0d816c5c88d3ff29ec0700d5f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevo\\bimlll\\templates\\Inventario.tpl',
      1 => 1594660822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0ca079adfcb2_64100024 (Smarty_Internal_Template $_smarty_tpl) {
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
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabla']->value, 'variable');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['variable']->value) {
?>
							<tr>
								<td> <?php echo $_smarty_tpl->tpl_vars['variable']->value['id'];?>
 </td>
								<td> <?php echo $_smarty_tpl->tpl_vars['variable']->value['Nombre'];?>
 </td>
								<td> <?php echo $_smarty_tpl->tpl_vars['variable']->value['Descripcion'];?>
 </td>
								<td> <?php echo $_smarty_tpl->tpl_vars['variable']->value['Precio'];?>
 </td>
								<td> <?php echo $_smarty_tpl->tpl_vars['variable']->value['Cantidad'];?>
 </td>
							</tr> 
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</tbody>
				</table>

			</div>
		</div>
	</form><?php }
}
