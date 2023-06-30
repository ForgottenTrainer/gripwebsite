<?php include "cabecera.php"; ?>
<?php include "conexion.php"; ?>

<?php 

if(isset($_GET['id'])){

    $fecha= new DateTime();
    $id = $_GET['id'];

    //Actualiza los datos
	$records = $conn->prepare("SELECT * FROM post WHERE id = :id ");
	$records->bindParam(':id', $id);
	$records->execute();
	$row = $records->fetch(PDO::FETCH_ASSOC);

} else {
	echo "<h1>No se encontro ningun post</h1>";
}

?>

<header class="masthead" style="background-image: url('imagenes/<?php echo $row['imagen']; ?>')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1><?php echo "Modifca tu post" ?> </h1>
                    
                </div>
            </div>
        </div>
    </div>
</header>
<div class="mx-auto p-2">
	<div class="card mx-auto p-2" style="width: 48rem;">
	  <div class="card-body">
		<form action="updPost.php?id=<?php echo $id; ?>" method="POST">
			<div class="mb-3">
			  <label for="exampleFormControlInput1" class="form-label">Titulo</label>
			  <input type="text" value="<?php echo $row['titulo']; ?>" name="titulo" class="form-control" id="exampleFormControlInput1" placeholder="Titulo nuevo">
			</div>
			<div class="mb-3">
			  <label for="exampleFormControlTextarea1" class="form-label">Descripcion</label>
			  <textarea class="form-control" name="descripcion" id="exampleFormControlTextarea1" rows="3"><?php echo $row['descripcion']; ?></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Editar</button>
		</form>
	  </div>
	</div>
</div>