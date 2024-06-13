<?php

session_start();

try {
    $conexion = new PDO("mysql: host=localhost; dbname=focaap;", 'root', '');
    echo "conexion OK";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}



?>