<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-10 20:11:01
  from 'C:\xampp\htdocs\nuevo\bimlll\templates\Cabecera.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f08af358a08a8_11857671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ef1b7337957bd82f376935a7bcb8c654f820e3f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevo\\bimlll\\templates\\Cabecera.tpl',
      1 => 1594404656,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f08af358a08a8_11857671 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row   red lighten-3">
	<div class=" col s4 " >
		<p class="black-text  "> <strong>USUARIO: <?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
</strong> </p>
		<p class="black-text  "> <strong>PUESTO: <?php echo $_smarty_tpl->tpl_vars['tipo']->value;?>
</strong> </p>
	</div>
	<div class=" col s4" >
		<i class="medium material-icons">person_pin</i>
		<img class="materialboxed " data-caption="Usuario" width="100">
	</div>
	<div class=" col s4 ">
		<a href="?controller=Salir&action=CerrarSesion" class="brand-logo black-text  ">Salir</a>
	</div>
</div><?php }
}
