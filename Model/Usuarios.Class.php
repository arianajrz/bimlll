<?php
	Class Usuarios
	{
		public function BuscarUsuario()
		{
			//echo "<br/>buscar usuario";

			$user=new Conexion();
			$q="SELECT * FROM `usuarios` WHERE 1";
			$resultado=$user->query($q);
			var_dump($resultado);

			if ($resultado)
			{
				if($resultado->num_rows==0)
				{
					echo "<br>consulta vacia";
				}
				else 
				{
					echo "<br>datos en la consulta";
				}
			}
			else
			{
				echo "<br>error en la consulta";
			}


		}
	}
?>