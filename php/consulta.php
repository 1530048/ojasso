<?php

	$bd = 'vetanimals';
	$usuario = 'root';
	$contrasena = '';
	$serv = 'localhost'; //127.0.0.1
	
	$conexion = mysqli_connect($serv, $usuario, $contrasena, $bd);
	if(!$conexion){ //si no tuvo exito la conexión
		echo 'No me pude conectar al servidor de la Base de datos';
		header('location:../consulta.html');
		exit;

	}

	if( isset($_POST)){


	$nombre_paciente =  $_POST["nombre_paciente"];
	$fecha_consulta =  $_POST["fecha_consulta"];
	$diagnostico =  $_POST["diagnostico"];

	$insertconsulta="INSERT INTO consulta(nombre_paciente,fecha_consulta,diagnostico)VALUES('$nombre_paciente','$fecha_consulta','$diagnostico')";

	$resultado = mysqli_query($conexion, $insertconsulta);

	if ($resultado){
		echo 'inserción fallida';
	}else{
		echo 'insercion fallida';
	}
	mysqli_close($conexion);
	sleep(4);
	}
	?>