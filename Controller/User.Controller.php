<?php
	Class User
	{
		public function ValidarUsuario()
		{
			$us=new Usuarios();
			$smarty=new Smarty();
			$lib=new Librerias();

			$u=$_POST['usuario'];
			$pass=$_POST['pass'];
			$tipo=$_POST['tipo'];

			$dato=$us->BuscarUsuario($u,$pass,$tipo);
			$d=$lib->DatosRow($dato);

			if($dato->num_rows==1)
			{
				session_start();
				$_SESSION['user']=$u;
				$_SESSION['tipo']=$tipo;
				$_SESSION['vista']="null";
				
				$smarty->assign('e','null');
				$smarty->assign('vista',$_SESSION['vista']);
				$smarty->assign('usuario',$_SESSION['user']);
				$smarty->assign('tipo',$_SESSION['tipo']);
				$smarty->display('Master.tpl');
			}
			else
			{
				$smarty->display('master.tpl');
			} 

		}

		public function GuardarUsuario()
		{
			$guardar = new Usuarios();
			$smarty=new Smarty();
			session_start();

			$nombre=$_POST['nombre'];
			$apellido=$_POST['apellido'];
			$u=$_POST['usuario'];
			$foto=$_POST['foto'];
			$fecha=$_POST['fecha'];
			$tipo=$_POST['tipo'];
			$pass=$_POST['pass'];
			$repass=$_POST['RePass'];
			

			//var_dump($_POST);

			$transaccion=$guardar->AgregarUsuario($nombre,$apellido,$u,$tipo,$pass);

			if($transaccion)
			{
				$men= "usuario ".$nombre." creado";
			}
			else 
			{
				$men= "usuario ".$nombre." no guardado";
			}
			
			$smarty->assign('men',$men);
			$smarty->assign('e','null');
			$smarty->assign('vista','CrearUsuario');
			$smarty->assign('usuario',$_SESSION['user']);
			$smarty->assign('tipo',$_SESSION['tipo']);
			$smarty->display('Master.tpl');
		}

		public function GuardarInvent()
	   {
			//echo "en guardar usuario";
			$guardar = new Inventario();
			$smarty=new Smarty();
			session_start();

			$nom=$_POST['nombre'];
			$des=$_POST['descripcion'];
			$precio=$_POST['precio'];
			$cant=$_POST['cantidad'];

			//var_dump($_POST);

			$transaccion=$guardar->AgregarInvent($nom,$des,$precio,$cant);

			if($transaccion)
			{
				$men= "producto ".$nombre." agregado";
			}
			else 
			{
				$men= "producto ".$nombre." no agregado";
			}
			
			$smarty->assign('men',$men);
			$smarty->assign('e','null');
			$smarty->assign('vista','CrearProducto');
			$smarty->assign('usuario',$_SESSION['user']);
			$smarty->assign('tipo',$_SESSION['tipo']);
			$smarty->display('Master.tpl');
		
	   }

	}

?>