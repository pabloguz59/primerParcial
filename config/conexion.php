<?php
  $host = "localhost";
  $usuario = "root";
  $contraseña = "";
  $base_de_datos= "bd_login";


  $conexion =  new mysqli($host , $usuario, $contraseña, $base_de_datos);

  if($conexion->connect_error){
    die("Error de conexion" . $conexion->$connect_error);
  }else{
    //echo "Conexion exitosa";
  }
  
?>