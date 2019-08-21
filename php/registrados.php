<?php

	$bd = 'vetanimals';
	$usuario = 'root';
	$contrasena = '';
	$serv = 'localhost'; //127.0.0.1
	
	$conexion = mysqli_connect($serv, $usuario, $contrasena, $bd);
	if(!$conexion){ //si no tuvo exito la conexión
		echo 'No me pude conectar al servidor de la Base de datos';
		header('location:../registrados.html');
		exit;

	}

	if( isset($_POST)){

	$insertconsulta="SELECT nombre_paciente,edad,sexo,raza,color FROM paciente";
	if($resultadoS){
		while ($row = $resultadoS->fetch_assoc()) {
			echo '<br>id: '.$row["id"].' nombre: '.$row["nombre_paciente"].' edad: '.$row["edad"].' raza: '.$row["raza"].'color: '.$row["color"];
		}
	}else{
		echo 'Select fallida';
	}

	$resultado = mysqli_query($conexion, $insertconsulta);

	if ($resultado){
		echo 'inserción fallida';
		header('location:../registrados.html');
	}else{
		echo 'insercion fallida';
		header('location:../registrados.html');
	}
	mysqli_close($conexion);
	sleep(4);
	}
	?>