<?php
session_start();
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];

    $sql = "SELECT id, nombre, contraseña FROM usuario WHERE email='$email'";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0){
        $fila = $resultado->fetch_assoc();
        if (password_verify($contraseña, $fila['contraseña'])){
            $_SESSION['id'] = $fila['id'];
            $_SESSION['nombre'] = $fila['nombre'];
            
            header("Location: welcome.php");
            exit();
        }else{
            echo "<script>alert('Contraseña incorrecta');</script>";
           
            header("refresh:1 url=login.php");
        exit();
        }
    }else{
        echo "Usuarios no encontrado";
    }
    $conexion->close();
}

?>