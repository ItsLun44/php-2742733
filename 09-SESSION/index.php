<?php

//session_start();// inicializa una sesion

// $_SESSION['nombre'] = 'thomas';
// $_SESSION['pais'] = 'india';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Pagina de inicio</h1>

<form action="registro.php" method="POST">
    <label for="usuario">Usuario</label>
    <input type="text" placeholder="usuario" name="usuario">
    <br>
    <label for="contraseña">Contraseña</label>
    <input type="text" placeholder="contraseña" name="contraseña">
    <br>
    <button type="submit">Registro</button>
</form>

<a href="./user.php">User page</a>
<a href="./cerrar.php">Cerrar</a>

    
</body>
</html>