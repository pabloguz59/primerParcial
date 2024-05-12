<?php
include ("conexion.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nombre =$_POST["nombre"];
    $email =$_POST ["email"];
    $contraseña = $_POST["contraseña"];

    $contraseña =password_hash($_POST["contraseña"],PASSWORD_DEFAULT);
    $sql ="INSERT INTO usuario(nombre,email,contraseña) VALUES('$nombre','$email','$contraseña')";
    if($conexion->query($sql)===TRUE){
        echo "Registro exitoso!";
        header("refresh:3; url=login.php");
        exit();
    }else{
        echo "ERROR ".$sql. "<br>" .$conexion->error;
    }
    $conexion->close();
}
?>