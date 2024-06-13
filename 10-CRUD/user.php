<?php

require('conexion.php');
require('header.php');

?>

<?php if (isset($_SESSION['userRegister']))   ?>

<h1>AGREGAR CURSO</h1>

<hr>

<?php if (isset($_SESSION['mensaje'])) {  ?>

    <div class="row">
        <div class="col">
            <div class="alert alert-<?php  echo $_SESSION['color'] ?> alert-dismissible fade show" role="alert">
                <p class="mb-0"><?php  echo $_SESSION['mensaje'] ?></p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>

<?php } ?>

<form action="agregar_curso.php" method="POST">
    <label for="titulo_curso">Agregar curso</label>
    <input type="text" name="titulo_curso" id="titulo_curso" placeholder="agregar">
    <br>
    <label for="imagen_curso">Agregar imagen</label>
    <input type="file" name="imagen_curso" id="imagen_curso" placeholder="agregar">
    <br>
    <label for="descripcion">Descripcion curso</label>
    <input type="text" id="descripcion" name="descripcion_curso" placeholder="descripcion">
    <br>
    <label for="estudiantes">estudiantes</label>
    <input type="text" id="estudiantes" name="estudiantes" placeholder="estudiantes">
    <input type="submit" value="Registrar_curso">
</form>

<?php require('footer.php'); ?>