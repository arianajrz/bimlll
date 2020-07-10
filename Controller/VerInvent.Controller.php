<?php
	class VerInvent 
	{
		public function MuestraInventario()
		{	
			$mostrar = new Inventario();
			$lib = new Librerias();
			$smarty = new Smarty();

			{
				$datos=$mostrar->VerInventario();
				$tabla=$lib->PrepararSmarty($datos);
 
				$smarty->assing('Inventario' , $tabla); 
			}
			
			$smarty->assign('e','true');  
			$smarty->assign('vista','Inventario'); 
			$smarty->assign('usuario',$_SESSION['user']); 
			$smarty->assign('tipo',$_SESSION['tipo']); 
			$smarty->display('Master.tpl');
		}
	}
?>