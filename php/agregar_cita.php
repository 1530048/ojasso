<?php
	$bd = 'vetanimals';
	$usuario = 'root';
	$contrasena = '';
	$serv = '127.0.0.1'; //127.0.0.1
	
	$conexion = mysqli_connect($serv, $usuario, $contrasena, $bd);
	if(!$conexion){ //si no tuvo exito la conexióno
		echo 'No me pude conectar al servidor de la Base de datos';
		exit;

	}
	echo "string";

	
	if( isset($_POST)){

	$nombre_paciente =  $_POST["nombre_paciente"];
	$fecha_actual = $_POST["fecha_actual"];
	$fecha_cita = $_POST["fecha_cita"];
	$motivo = $_POST["causa"];

	$insertcitas="INSERT INTO citas(nombre_paciente,fecha_actual,fecha_cita,motivo) VALUES ('$nombre_paciente','$fecha_actual','$fecha_cita','$motivo')";

	$resultado=mysqli_query($conexion,$insertcitas);
	
	if($resultado){
		echo 'Inserción exitosa';
		header('location:../citas.html');
	}else{
		echo 'Inserción fallida';
	}
	mysqli_close($conexion);
	sleep(4);
	}

	?>
