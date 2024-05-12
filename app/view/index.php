<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        
    </header>
    <div>
    <h2>Bienvenido</h2>
    <p>¿Que desea ?</p>
    <p><a href="login.php" class="i">Iniciar sesion</a></p>
    <p><a href="register.php" class="j">Registrarse</a></p>
    </div>
    <footer>
        
    </footer>
</body>

<style>

    div{
        
        border:1px solid black;
        border-radius:5px;
        height:220px;
        width:200px;
        text-align: center;
        position: absolute;
        left:550px;
        margin-top:80px;
        
    }

    .i{
        background-color: blue;
        display:inline-block;
        color: white;
        padding: 10px; 
        border-radius: 5px;
        margin-bottom: 10px;
        width:100px;
       
    }
    .i:hover{
        transform:scale(1.5);

    }
    .j:hover{
        transform:scale(1.5);

    }
    .j{
        background-color: blue;
        display:inline-block;
        color: white;
        padding: 10px; 
        border-radius: 5px;
        margin-bottom: 10px;
        width:100px;
    }
    header{

        width: 1350px;
        height: 100px;
        background-color:blue;
    }
    footer{
        width: 1350px;
        height: 100px;
        background-color:blue;
        position:absolute;
        top: 500px;
    }
</style>
</html>