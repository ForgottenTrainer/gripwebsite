<?php include "cabecera.php"; ?>

<?php
include "conexion2.php";
$ObjConexion = new conexion();
$proyecto = $ObjConexion->consultar("SELECT * FROM post ORDER BY id DESC ");
?>

<!-- Page Header-->
<header class="masthead" style="background-image: url('https://images.unsplash.com/photo-1517346665566-17b938c7f3ad?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>GRIP Blog</h1>
                    <span class="subheading">Conoce nuestros ultimos posts</span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content-->

<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <!-- Post preview-->
            <?php foreach($proyecto as $proyectos) { ?>
            <div class="post-preview">
                <a href="post.php?id=<?php echo $proyectos['id']; ?>">
                    <h2 class="post-title"><?php echo $proyectos['titulo']; ?> </h2>
                    
                </a>
                <p class="post-meta">
                    Posted by
                    <a href="#!">GRIP</a>
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
            <?php } ?>
        </div>
    </div>
</div>


<?php include "pie.php" ?>
    
    
