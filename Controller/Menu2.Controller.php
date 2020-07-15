<?php
	class Menu2
	{
		public function CargarOp()
		{
			$smarty=new Smarty();
			session_start();
			$_SESSION['op2']=$_GET['op2'];

			$smarty->assign('e','null');
			$smarty->assign('vista',$_SESSION['op2']);
			$smarty->assign('usuario',$_SESSION['user']);
			$smarty->assign('tipo',$_SESSION['tipo']);
			$smarty->display('master.tpl');
		}

		public function InventarioGeneral()
		{
		  
			$smarty=new Smarty();
            $inventario=new Inventario();
            $lib=new Librerias();
			session_start();
			$_SESSION['op2']=$_GET['op2'];
            
            $invent=$inventario->VerInventario();
            
            
            $tabla=$lib->DatosSmarty($invent);
           
            
            $smarty->assign('tabla',$tabla);
			$smarty->assign('e','null');
			$smarty->assign('vista',$_SESSION['op2']);
			$smarty->assign('usuario',$_SESSION['user']);
			$smarty->assign('tipo',$_SESSION['tipo']);
			$smarty->display('master.tpl');
		}
	}
?>