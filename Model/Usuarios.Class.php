<?php
	Class Usuarios
	{
		public function BuscarUsuario($u, $pass, $tipo)
		{
			
			$user=new Conexion();
			$q="SELECT * FROM `usuarios` WHERE `usuario`='$u' AND `tipo`='$tipo' AND `password`='$pass';";
			$resultado=$user->query($q);
			return $resultado;
			
		}
		
		public function AgregarUsuario($nom, $ape, $u, $tipo, $pass)
		{
			//INSERT INTO `usuario`(`Nombre`, `Apellido`, `Password`, `Tipo`) VALUES ()

			$usuario = new Conexion();
			$query="INSERT INTO `usuarios`(`nombre`, `apellido`, `usuario`, `tipo`, `password`) VALUES ('$nom','$ape', '$u', '$tipo','$pass');";
			$consulta=$usuario->query($query);
			$usuario->close();
			return $consulta;
		}
	}
?>