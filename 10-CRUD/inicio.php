<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./inicio.css">
</head>

<body>
    <div class="contenedor_todo_todo">
        <div class="contenedor_todo">
            <h1 class="inicio_style animate__animated animate__bounce">Pagina inicio</h1>

            <form action="index.php" method="POST">
                <div class="usuario_label">
                    <label class="style_user2" for="user">Usuario</label>
                    <input class="style_user" type="text" placeholder="usuario" name="user">
                </div>
                <br>
                <div class="password_label">
                    <label for="password">Contraseña</label>
                    <input class="style_password" type="text" placeholder="password" name="password">
                </div>
                <br>
                <button class="style_inicio" type="submit">INICIAR SESION</button>


            </form>
            
                <a class="registrate_style" href="./registro.php">REGISTRATE</a>
        
        </div>

        

    </div>


    <video width="100%" height="100%" autoplay loop muted>
        <source src="./estudio_video.mp4" type="video/mp4" />
    </video>

</body>

</html>