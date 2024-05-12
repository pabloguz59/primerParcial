<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header></header>
    <div>
    <h2>Registrarse</h2>
    <form action="register_user.php" method="post">
       Nombre: <input type="text" name="nombre" required>
       Email: <input type="email" name="email" required>
       Contraseña: <input type="password" name="contraseña" required>
       <input type="submit" value="Registrarse" id="i">
    </form>
    <p><a href="login.php">Ya tienes una cuenta ? Inicia sesion pe </a></p>
    </div>
    <footer></footer>
    
</body>

<style>
    div{
        
        border:1px solid black;
        border-radius:5px;
        height:280px;
        width:200px;
        text-align: center;
        position: absolute;
        left:550px;
        margin-top:60px;
        
    }

    #i{
        background-color: red;
        color: white;
        border-radius: 5px;
        margin-bottom: 10px;
        width:100px;
        margin:10px;
       
    }
    #i:hover{
        transform:scale(1.5)
    }
    header{

        width: 1350px;
        height: 100px;
        background-color:red;
    }
    footer{
        width: 1350px;
        height: 100px;
        background-color:red;
        position:absolute;
        top: 500px;
    }
</style>
</html>