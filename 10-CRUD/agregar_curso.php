<?php

require('conexion.php');

if ($_SERVER["REQUEST_METHOD"] == 'POST') {

    echo 'datos enviados';

    $TituloCurso = $_POST['titulo_curso'];
    $ImagenCurso = $_POST['imagen_curso'];
    $DescripcionCurso = $_POST['descripcion_curso'];
    $EstudiantesCurso = $_POST['estudiantes'];

    $statement = $conexion->prepare("INSERT INTO `cursos`(`imagen`, `curso`, `descripcion`, `estudiantes`) 
    VALUES (?,?,?,?)");
    $statement->execute(array($ImagenCurso, $TituloCurso, $DescripcionCurso, $EstudiantesCurso));

    $_SESSION['mensaje'] = 'Tarea agragada exitosamente';
    $_SESSION['color'] = 'success';

    header('location: user.php');
    
}


?>
