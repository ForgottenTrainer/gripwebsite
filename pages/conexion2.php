<?php

// Crea la clase para la conexión de base de datos
class conexion {
    // Lee la conexión de la base de datos
    private $servidor = "localhost";
    private $usuario = "root";
    private $contrasenia = "";
    private $conexion;

    public function __construct() {
        try {
            // Si todo es correcto se crea la conexión
            $dsn = "mysql:host=$this->servidor;dbname=grip;";
            $this->conexion = new PDO($dsn, $this->usuario, $this->contrasenia);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e;
        }
    }

    public function ejecutar($sql) { // Insertar/delete/actualizar
        $this->conexion->exec($sql);
        return $this->conexion->lastInsertId();
    }

    public function consultar($sql) {
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        return $sentencia->fetchAll();
    }
}

?>
