<?php include("includes/header.php") ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php?controller=empleados&accion=index"><?php echo $data['titulo'] ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
  </div>
</nav>

<div class="container mt-3">

    <div class="card  w-50">
        <div class="card-body">
            <form id="nuevo" name="nuevo" method="POST" action="index.php?controller=empleados&accion=guarda" autocomplete="off">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="IDnombre" name="Nombre">
                </div>
                <div class="mb-3">
                    <label for="marca" class="form-label">Edad</label>
                    <input type="text" class="form-control" id="IDedad" name="Edad">
                </div>

                <input type="submit" value="Guardar" id="guardar" name="guardar" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>



<?php include("includes/footer.php") ?>