<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-10 19:34:47
  from 'C:\xampp\htdocs\nuevo\bimlll\templates\Cabeceras\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f08a6b72fd3b6_91887443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3efea691f642f61126bef0631de13892d9c12840' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevo\\bimlll\\templates\\Cabeceras\\header.tpl',
      1 => 1594397962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabecera.tpl' => 1,
    'file:Login.tpl' => 1,
  ),
),false)) {
function content_5f08a6b72fd3b6_91887443 (Smarty_Internal_Template $_smarty_tpl) {
?>  <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="Framework/Materialize/css/materialize.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta charset="UTF-8"/>
      <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  <?php echo '<script'; ?>
 type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"><?php echo '</script'; ?>
>           
      <?php echo '<script'; ?>
 src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"><?php echo '</script'; ?>
> 

      <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
    </head>
    <body>  

	<div class="container">
		<div class="row">
			<?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {?>
				<?php $_smarty_tpl->_subTemplateRender('file:Cabecera.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			<?php } else { ?>
				<?php $_smarty_tpl->_subTemplateRender('file:Login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			<?php }?>
		</div>
<?php }
}
