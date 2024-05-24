<?php

try {
    $conexion = new PDO("mysql: host=localhost; dbname=colegio",'root','');
    echo "conexion exitosa";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// vamos a crear una sentencia AQL y la guardamos en una variable
$statement = $conexion->prepare("INSERT INTO `profesores`(, `Nombre`, `Documento`) VALUES ('thomas','02133');");

// ejecutar statement
$statement->execute();

// fetch() regresa solo un resultado             fetchAll() regresa todos los resultados
$statement = $statement->fetchAll();

// print_r($statement);
echo "<br>";

foreach ($statement as $item) {
    echo $item['ID'] . ' - ' . $item['nombre'] . '<br>';
}
?>