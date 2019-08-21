<?php

	$bd = 'vetanimals';
	$usuario = 'root';
	$contrasena = '';
	$serv = '127.0.0.1'; //127.0.0.1
	
	$conexion = mysqli_connect($serv, $usuario, $contrasena, $bd);
	if(!$conexion){ //si no tuvo exito la conexión
		echo 'No me pude conectar al servidor de la Base de datos';
		exit;

	}

	$cnx=new PDO("mysql:host=127.0.0.1;dbname=vetanimals","root","");

	/*
	class conexionDB{
		public function getConexion(){
			$cnx=new PDO("mysql:host=127.0.0.1;dbname=vetanimals","root","");
			return $cnx;
		}
	}
*/




	if( isset($_POST)){


	$nombre_paciente =  $_POST['nombre_paciente'];
	$edad =  $_POST['edad'];
	$sexo =  $_POST['sexo'];
	$raza =  $_POST['raza'];
	$color = $_POST['color'];
	$peso =  $_POST['peso'];

	$nombre_alimento = $_POST['nombre_alimento'];
	$tipo_alimento = $_POST['tipo_alimento'];
	$cantidad_alimento = $_POST['cantidad_alimento'];

	$nombre_vacuna = $_POST['nombre_vacuna'];
	$fecha_aplicacionv =$_POST['fecha_aplicacionv'];

	$producto = $_POST['producto'];
	$fecha_aplicaciond =$_POST['fecha_aplicaciond'];	

	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$domicilio =  $_POST['domicilio'];
	$telefono = $_POST['telefono'];

/*
	$insertpaciente="INSERT INTO paciente(nombre_paciente,edad,sexo,raza,color,peso, nombre_alimento, tipo_alimento,cantidad_alimento, nombre_vacuna,fecha_aplicacionv,producto, fecha_aplicaciond, nombre, apellido, direccion,telefono)VALUES('$nombre_paciente','$edad','$sexo','$raza','$color','$peso','$nombre_alimento','$tipo_alimento','$cantidad_alimento','$nombre_vacuna','$fecha_aplicacionv',$producto','fecha_aplicaciond','$nombre','$apellido','$domicilio', '$telefono')";
	
	
		$resultado = mysqli_query($conexion, $insertpaciente);
		

	if ($resultado){
		echo 'inserción exitosa';
	}else{
		echo 'insercion fallida';
	}
	mysqli_close($conexion);
	sleep(4);*/
	
	}


	$reg=$cnx->prepare("INSERT INTO paciente(nombre_paciente,edad,sexo,raza,color,peso, nombre_alimento, tipo_alimento,cantidad_alimento, nombre_vacuna,fecha_aplicacionv,producto, fecha_aplicaciond, nombre, apellido, direccion,telefono) VALUES(:nombre_paciente,:edad,:sexo,:raza,:color,:peso, :nombre_alimento, :tipo_alimento,:cantidad_alimento, :nombre_vacuna,:fecha_aplicacionv,:producto, :fecha_aplicaciond, :nombre, :apellido, :domicilio,:telefono)");
	echo $fecha_aplicaciond;
	$reg->bindParam(":nombre_paciente", $nombre_paciente);
	//$reg->bindParam(":id_cliente", 5);
	$reg->bindParam(":edad", $edad);
	$reg->bindParam(":sexo", $sexo);
	$reg->bindParam(":raza", $raza);
	$reg->bindParam(":color", $color);
	$reg->bindParam(":peso", $peso);
	$reg->bindParam(":nombre_alimento", $nombre_alimento);
	$reg->bindParam(":tipo_alimento", $tipo_alimento);
	$reg->bindParam(":cantidad_alimento", $cantidad_alimento);
	$reg->bindParam(":nombre_vacuna", $nombre_vacuna);
	$reg->bindParam(":fecha_aplicacionv", $fecha_aplicacionv);
	$reg->bindParam(":producto", $producto);
	$reg->bindParam(":fecha_aplicaciond", $fecha_aplicaciond);
	$reg->bindParam(":nombre", $nombre);
	$reg->bindParam(":apellido", $apellido);
	$reg->bindParam(":domicilio", $domicilio);
	$reg->bindParam(":telefono", $telefono);

	if ($reg->execute()){
		echo 'inserción exitosa';
		header('location:../registro_paciente.html');
		
	}else{
		echo 'insercion fallida';
	}

?>

