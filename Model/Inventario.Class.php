<?php
	Class Inventario
	{
		public function BuscarInventario($nom, $des, $precio, $cant)
		{
			$usuario = new Conexion();
			$query="SELECT * FROM `inventario` WHERE `Nombre`='$nom' AND `Descripcion`='$des' AND `Precio`='$precio' AND `Cantidad`='$cant';";

			$consulta=$usuario->query($query);
			$usuario->close();
			return $consulta;
		}

		public function AgregarInvent($nom, $des, $precio, $cant)
		{
			//INSERT INTO `usuario`(`Nombre`, `Apellido`, `Password`, `Tipo`) VALUES ()

			$usuario = new Conexion();
			$query="INSERT INTO `inventario`(`Nombre`, `Descripcion`, `Precio`, `Cantidad`) VALUES ('$nom','$des','$precio','$cant');";
			$consulta=$usuario->query($query);
			$usuario->close();
			return $consulta;
		}

  		
		public function VerInventario()
		{
			 $con=new Conexion();

			 $query="SELECT * FROM inventario WHERE 1;";
			 $consulta=$con->query($query);
			 $con->close();
			 return $consulta;
		}

	}
?>