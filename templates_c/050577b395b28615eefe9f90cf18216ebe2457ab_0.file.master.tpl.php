<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-13 19:50:52
  from 'C:\xampp\htdocs\nuevo\bimlll\templates\master.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f0c9efc58ffa7_54470171',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '050577b395b28615eefe9f90cf18216ebe2457ab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevo\\bimlll\\templates\\master.tpl',
      1 => 1594662638,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/header.tpl' => 1,
    'file:MenuAdmin.tpl' => 1,
    'file:MenuTrab.tpl' => 1,
    'file:CrearUsuario.tpl' => 1,
    'file:CrearProducto.tpl' => 1,
    'file:Inventario.tpl' => 1,
    'file:Cabeceras/footer.tpl' => 1,
  ),
),false)) {
function content_5f0c9efc58ffa7_54470171 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:Cabeceras/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('titulo'=>'Home'), 0, false);
?>
	<?php if (isset($_smarty_tpl->tpl_vars['e']->value)) {?>
		<?php if (isset($_smarty_tpl->tpl_vars['men']->value)) {?>
			<div align="center">
				<h6><?php echo $_smarty_tpl->tpl_vars['men']->value;?>
</h6>
			</div>
		<?php }?>

		<div class="row">
			<div class="col s4">
			
				<?php if ($_smarty_tpl->tpl_vars['tipo']->value == "Administrador") {?>
					<?php $_smarty_tpl->_subTemplateRender('file:MenuAdmin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<?php } else { ?>
					<?php $_smarty_tpl->_subTemplateRender('file:MenuTrab.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<?php }?>
			</div>

			<div class="col s8">
				<?php if ($_smarty_tpl->tpl_vars['vista']->value == "CrearUsuario") {?>
					<?php $_smarty_tpl->_subTemplateRender('file:CrearUsuario.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

				<?php } elseif ($_smarty_tpl->tpl_vars['vista']->value == "CrearProducto") {?>
					<?php $_smarty_tpl->_subTemplateRender('file:CrearProducto.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					
				<?php } elseif ($_smarty_tpl->tpl_vars['vista']->value == "InventarioGeneral") {?>
					<?php $_smarty_tpl->_subTemplateRender('file:Inventario.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

					<?php } elseif ($_smarty_tpl->tpl_vars['vista']->value == '') {?>

					<?php } elseif ($_smarty_tpl->tpl_vars['vista']->value == '') {?>

					<?php } elseif ($_smarty_tpl->tpl_vars['vista']->value == '') {?>

					<?php } else { ?>
						<i class="large material-icons">touch_app</i>
					<?php }?>

			</div>

		</div>
	<?php }
$_smarty_tpl->_subTemplateRender('file:Cabeceras/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
