<?php include("conexion.php"); ?>

<?php

if (!empty($_GET['id']) && !empty($_POST['titulo']) && !empty($_POST['descripcion'])) {
    $id = $_GET['id'];

    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];

    // Actualiza los datos
    $sql = "UPDATE `post` SET `titulo` = :titulo, `descripcion` = :descripcion WHERE `id` = :id";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':titulo', $titulo);
    $stmt->bindParam(':descripcion', $descripcion);

    if ($stmt->execute()) {
        header("location: subir.php");
        exit();
    } else {
        echo "Error updating data: " . $stmt->errorInfo()[2];
    }
} else {
    echo "Error: Los campos no pueden estar vacíos";
}
?>
