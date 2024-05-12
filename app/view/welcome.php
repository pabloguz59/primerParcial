<?php
session_start();

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<body>
    <header></header>
    <div>
    <h2>Bienvenido!! , <?php echo $_SESSION['nombre']; ?> </h2>
    <p><a href="logout.php" class="i">Cerrar Sesión</a></p>
    </div>
    <footer></footer>
    
</body>

<style> 
header{
    height: 1000px;
    width:200px;
    background:green;
}
footer{
    height: 1000px;
    width:200px;
    background:green;
    position: absolute;
    right:80px;
    bottom:-380px;
}
div{
    font-size:40px;
        height:250px;
        width:500px;
        text-align: center;
        position: absolute;
        bottom: 100px;
        left:350px;
        margin-top:90px;
}
.i{
        background-color: green;
        display:inline-block;
        color: white;
        padding: 10px; 
        border-radius: 5px;
        margin-bottom: 10px;
        width:120px;
       
    }
</style>
</html>