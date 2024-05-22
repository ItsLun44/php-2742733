<?php

// SQL Syntax


// SQL Select
// SELECT `nombre` FROM `estudiantes`
// SELECT se utiliza para seleccionar datos en concreto de una base de datos


// SQL Select Distint
// SELECT DISTINCT `edad` FROM `estudiantes`;
// SELECT DISTINCT Sirve para seleccionar solo un dato que este repetido dentro de una base de datos


// SQL Where
// SELECT * FROM `estudiantes` WHERE 11=`grado`;
// WHERE se utiliza para seleccionar todos los datos que coincidan con la condicion que se ponga


// SQL Order by
// SELECT * FROM `estudiantes` ORDER BY edad DESC;
// SELECT sirve para seleccionar datos y ordenarlos de mayor a menor o visceversa


// SQL AND
// SELECT * FROM estudiantes WHERE edad = '16' AND nombre LIKE 'S%';
// AND sirve para añadir una nueva condicion a la hora de buscar datos 


// SQL OR
// SELECT * FROM estudiantes WHERE edad = '20' OR nombre = 'pedro';
// OR tiene una funcion parecida al "AND" pero deja agregar mas condiciones


// SQL NOT
// SELECT * FROM estudiantes WHERE NOT nombre = 'pedro';
// NOT sirve para encontrar los datos contrarios al que se este eligiendo


//8. SQL select INSERT INTO
//INSERT INTO `profesores`(, `Nombre`, `Documento`) VALUES ('thomas','02133');
//insertamos a un nuevo profesor en la tabla de profesores...


//9. SQL select null values
//SELECT `nombre` FROM `estudiantes` WHERE `nombre` IS NOT NULL;
//selecciona el valor no vacio de la tabla de los estudiantes seleccionando el nombre el cual no es nulo


//10. SQL select UPDATE
//UPDATE `estudiantes` SET `edad`= '14' WHERE `ID` = 2;
//Actualiza los datos de la tabla

//11. SQL select DELETE
//DELETE FROM `estudiantes` WHERE `nombre`= 'yurley';
//ELimina los datos ya exitentes de la tabla..
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>