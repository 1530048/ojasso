<?php
      $bd = 'vetanimals';
      $usuario = 'root';
      $contrasena = '';
      $host = '127.0.0.1'; //o localhost

      $conexion = mysqli_connect($host,$usuario,$contrasena,$bd);

      if(!$conexion){
        echo 'No me pude conectar al servidor de la BD';
        exit;
    }
?>