<?php include "conexion.php"; ?>
<?php include "cabecera.php"; ?>
<?php

session_start();

if(isset($_SESSION['id'])){
    $records = $conn->prepare('SELECT id, correo, password, nombre FROM usuario WHERE id = :id');
    $records->bindParam(':id', $_SESSION['id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC); //Imprime los resultados
    $user = null;

    //Si hay resultado se pasa la variable a user
    if(count($results) > 0){
        $user = $results;
    }

}


else {
    header("location:login.php");
}
?>
<?php
include "conexion2.php";

if($_POST){
    //print_r($_POST);
    //Lee los datos enviados del formulario y si estan completos los inserta a la base de datos.
    $fecha= new DateTime();
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $imagen = $fecha->getTimestamp()."". $_FILES['archivo']['name'];
    $imagen_temporal = $_FILES['archivo']['tmp_name'];
    $users = $_SESSION['id'];
    
    if($nombre != '' and $descripcion != '' and !empty($imagen)){
        move_uploaded_file($imagen_temporal,"imagenes/".$imagen);

        $ObjConexion = new conexion();
        //Inserta los datos enviados por el usuario a la base de datos
        // Generate a new id value
        $id = rand();

        // Insert the new record into the table
        $sql = "INSERT INTO post (id, titulo, imagen, descripcion, user_id) VALUES ($id, '$nombre', '$imagen', '$descripcion', '$users')";
        $ObjConexion->ejecutar($sql);
    }
    else{
        echo '
        <div class="m-auto mt-2 w-25 p-3 alert alert-danger" role="alert">
            Favor de llenar todos los campos
        </div>
        <br />
        ';
    }

}

if($_GET){
    //Le la peticion de borrar articulo, una vez lo tenga procede a eliminar el articulo
    $id=$_GET['borrar'];

    $ObjConexion = new conexion();
    $imagen = $ObjConexion->consultar("SELECT imagen FROM `post` WHERE id=".$id);
    unlink(("imagenes/".$imagen[0]['imagen']));

    $sql="DELETE FROM `post` WHERE `post`.`id` =".$id;
    $ObjConexion->ejecutar($sql);

}

//Leer el apartado de la base de datos ('productos')
$ObjConexion = new conexion();
$resultado=$ObjConexion->consultar("SELECT * FROM `post`");
?>

<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card">
                    <div class="card-header">
                        Datos del articulo
                        <br>
                    </div>
                    <div class="card-body shadow p-3">
                        <form action="subir.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Titulo</label>
                                <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">Titulo para tu articulo</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Imagen</label>
                                <input type="file" class="form-control" name="archivo">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Descripcion</label>
                                <textarea type="text" class="form-control" name="descripcion"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                            <a href="blog.php" class="btn btn-outline-secondary">Regresar</a>
                        </form>
                    </div>
                    <div class="card-footer text-muted">
                        Recuerda llenar de manera correcta la informacion dentro del formulario.
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="table-responsive">
                <h3 class="title">Posts</h3>
                <table class="table">
                    <thead>
                        <tr>
                            
                            <th scope="col">Nombre</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Mediante un ciclo foreach lee todos los productos de la base de datos que este asociado al id del vendedor -->

                        <?php foreach ($resultado as $proyecto){ ?>
                            <?php if ($proyecto['user_id'] == $_SESSION['id']){?>
                                <tr class="">
                                    
                                    <td><?php echo $proyecto['titulo']; ?> </td>
                                    <td><img width="100" height="100" src="imagenes/<?php echo $proyecto['imagen']; ?>" ></td>
                                    <td> <?php echo $proyecto['descripcion']; ?></td>
                                    <td><a class="btn btn-danger" href="?borrar=<?php echo $proyecto['id']; ?>"><i class='bx bxs-eraser'></i></a></td>
                                    <td><a href="update.php?id=<?php echo $proyecto['id']; ?>" class="btn btn-primary"><i class='bx bxs-pencil'></i></a></td>
                                </tr>
                            <?php } ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<br>


<?php include("pie.php");?>