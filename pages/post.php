<?php include "cabecera.php"; ?>

<?php
include "conexion.php";

if(isset($_GET['id'])){
    //Lee el id recibido del producto seleccionado
	$id = $_GET['id'];

    //Lee el id del producto y llama al contenido
	$records = $conn->prepare("SELECT * FROM post WHERE id = :id ");
	$records->bindParam(':id', $id);
	$records->execute();
	$row = $records->fetch(PDO::FETCH_ASSOC);

  $user_id = $row['user_id'];

  //Lee al usuario el cual subio el producto
  $users = $conn->prepare("SELECT * FROM usuario WHERE id = :id");
  $users->bindParam(':id', $user_id);
  $users->execute();
  $user = $users->fetch(PDO::FETCH_ASSOC);

}
else {
    echo '
    <div class="m-auto mt-2 w-25 p-3 alert alert-danger" role="alert">
        No se encontro el usuario
    </div>
    ';
}
?>
<header class="masthead" style="background-image: url('imagenes/<?php echo $row['imagen']; ?>')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1><?php echo $row['titulo']; ?> </h1>
                    
                    <span class="meta">
                        Posted by
                        <a href="#!">GRIP</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Post Content-->
<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <p><?php echo $row['descripcion']; ?> </p>
            </div>
        </div>
    </div>

<?php include "pie.php"; ?>