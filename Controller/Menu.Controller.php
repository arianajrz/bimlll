<?php
	class Menu
	{
		public function CargarOpcion()
		{
			$smarty=new Smarty();
			session_start();
			$_SESSION['opcion']=$_GET['opcion'];

			$smarty->assign('e','null');
			$smarty->assign('vista',$_SESSION['opcion']);
			$smarty->assign('usuario',$_SESSION['user']);
			$smarty->assign('tipo',$_SESSION['tipo']);
			$smarty->display('Master.tpl');
		}

		public function InventarioGeneral()
		{
		  
			$smarty=new Smarty();
            $inventario=new Inventario();
            $lib=new Librerias();
			session_start();
			$_SESSION['opcion']=$_GET['opcion'];
            
            $invent=$inventario->VerInventario();
            
            
            $tabla=$lib->DatosSmarty($invent);
           
            
            $smarty->assign('tabla',$tabla);
			$smarty->assign('e','null');
			$smarty->assign('vista',$_SESSION['opcion']);
			$smarty->assign('usuario',$_SESSION['user']);
			$smarty->assign('tipo',$_SESSION['tipo']);
			$smarty->display('master.tpl');
		}
	}
?>