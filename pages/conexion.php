<?php 

// Lee la conexión a la base de datos
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'grip';

try {
    // Si todo es correcto, se crea la conexión
    $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
    die('Conexión fallida: ' . $e->getMessage());
}

?>
