<?php 
        require_once('php/conexion.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Vetanimals</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/css-menu.css">

</head>

<body background="img/back1.jpg">
	<header>
		<div>
			<img class="logo" src="img/logoConfondo.png" onclick="location.href='index.html'">
		</div>
		<div>
			<div id="sidebar" class="sidebar">
    		<a href="#" class="boton-cerrar" onclick="ocultar()">&times;</a>
				<ul class="menu">
    				<li><a href="#" onclick="location.href='registro_paciente.html'">Registro</a></li>
    				<li><a href="#"onclick="location.href='registrados.php">Registrados</a></li>
    				<li><a href="#"onclick="location.href='consulta.html'">Consulta</a></li>
    				<li><a href="#"onclick="location.href='urgencias.html'">Urgencias</a></li>
    				<li><a href="#"onclick="location.href='citas.html'">Citas</a></li>
    				<li><a href="#"onclick="location.href='internados.html'">Internados</a></li>
    				<li><a href="#"onclick="location.href='servicios.html'">Servicios</a></li>
    				<li><a href="#"onclick="location.href='historial.html'">Historial</a></li>
    				<li><a href="#"onclick="location.href='inventario.html'">Inventario</a></li>
    				<li><a href="#"onclick="location.href='pago.html'">Pago</a></li>
        			<li><a href="#"onclick="location.href='login.html'">Cerrar sesion</a></li>
				</ul>
			</div>

			<div id="contenido">
  				<p><a> <alt="menu" style="border-width: 0px"/></a></p>
  				<a id="abrir" class="abrir-cerrar" href="javascript:void(0)" onclick="mostrar()"><img src="img/menu.png" width="30" height="30">
  				</a><a id="cerrar" class="abrir-cerrar" href="#" onclick="ocultar()"><img src="img/menu.png" width="30" height="30"></a>
			</div>
		</div>
	</header>

	<!-- Boton de nuevo -->
	<input type="submit" name="Nuevo" id="Nuevo" value="Nuevo" onclick="location.href='registro_paciente.html'">

	<h1 class="tituloModulo">Mascotas registradas</h1>


	<section class="registrados">
		<div>
			<div class="filaArriba">
				<div class="columna">
					Nombre
				</div>
				<div class="columna">
					Edad
				</div>
				<div class="columna">
					Sexo
				</div>
				<div class="columna">
					Raza
				</div>
				<div class="columna">
					Color
				</div>
				<div class="columna">
					Peso
				</div>	
				<div class="columna">
					Acciones
				</div>		
			</div>
				<?php
					$query = "SELECT nombre_paciente,edad,sexo,raza,color,peso FROM paciente";
					$resultado = mysqli_query($conexion,$query);
					$row_cont = $resultado->num_rows;
					if($row_cont > 0){
               			for($i = 0; $i <$row_cont; $i++){
		                   mysqli_data_seek ($resultado, $i);
		                   $dato= mysqli_fetch_array($resultado);
		                   echo '<div class="fila">';
		                   echo '<div class="columna">'.$dato['nombre_paciente'].'</div>';
		                   echo '<div class="columna">'.$dato['edad'].'</div>';
		                   echo '<div class="columna">'.$dato['sexo'].'</div>';
		                   echo '<div class="columna">'.$dato['raza'].'</div>';
		                   echo '<div class="columna">'.$dato['color'].'</div>';
		                   echo '<div class="columna">'.$dato['peso'].'</div>';
		                   echo '<div class="columna">'.'<img src="img/eliminar.png" width="40%" height="3%">'.'<img src="img/registro.png" width="40%" height="3%">'.'</div>';
		                   echo '</div>';
               			}
           			}
				?>
			</div>
		</div>
	</section>

<script  src="js/menu-desp.js"></script>
	
</body>
</html>
