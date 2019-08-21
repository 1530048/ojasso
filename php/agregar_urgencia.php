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
	$cnx=new PDO("mysql:host=127.0.0.1;dbname=vetanimals","root","");

	
	/*if( isset($_POST['nombre_paciente'])){

	$nombre_paciente =  $_POST["nombre_paciente"];
	$fecha_ingreso = $_POST["fecha_ingreso"];
	$motivo = $_POST["causa"];
	}*/ //else{

	/*
	$insertcitas="INSERT INTO urgencias(nombre_paciente,fecha_ingreso,causa) VALUES ('$nombre_paciente','$fecha_ingreso','$motivo')";

	$resultado=mysqli_query($conexion,$insertcitas);
	*/

	
	$insertcitas=$cnx->prepare("INSERT INTO urgencias(nombre_paciente,fecha_ingreso,causa) VALUES (:nombre_paciente, :fecha_ingreso, :motivo)");

	$insertcitas->bindParam(":nombre_paciente", $nombre_paciente);
	$insertcitas->bindParam(":fecha_ingreso", $fecha_ingreso);
	$insertcitas->bindParam(":motivo", $motivo);




	
	if($insertcitas->execute()){
		echo 'Inserción exitosa';
		header('location:agregar_urgencia.php');
	}else{
		echo 'Inserción fallida';
		header('location:../index.com');
	}
	mysqli_close($conexion);
	sleep(4);
	//}

	?>
