<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-13 20:05:28
  from 'C:\xampp\htdocs\nuevo\bimlll\templates\MenuAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f0ca268508ce7_90870113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4fcb18d77fb40dc04d4cde88208c9f158d4df0a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevo\\bimlll\\templates\\MenuAdmin.tpl',
      1 => 1594663512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0ca268508ce7_90870113 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
	<div class="collection">
		 <a href="?controller=Menu&action=CargarOpcion&opcion=CrearUsuario" class="collection-item">Crear Usuario</a>
		 <a href="#!" class="collection-item">Habilitar / Deshabilitar</a>
		 <a href="?controller=Menu2&action=InventarioGeneral&op2=InventarioGeneral" class="collection-item">Inventario General</a>
		 <a href="#!" class="collection-item">Productos con mas salidas</a>
		 <a href="#!" class="collection-item">Productos con menos salidas</a>
		  <a href="#!" class="collection-item">Productos agotados</a>
  </div>
</div><?php }
}
