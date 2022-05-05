<?php include("includes/header.php") ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php?controller=vehiculos&accion=index"><?php echo $data['titulo'] ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
  </div>
</nav>

<div class="container mt-3">

    <div class="card  w-50">
        <div class="card-body">
            <form id="nuevo" name="nuevo" method="POST" action="index.php?controller=vehiculos&accion=guarda" autocomplete="off">
                <div class="mb-3">
                    <label for="placa" class="form-label">Placa</label>
                    <input type="text" class="form-control" id="IDplaca" name="Placa">
                </div>
                <div class="mb-3">
                    <label for="marca" class="form-label">Marca</label>
                    <input type="text" class="form-control" id="IDmarca" name="Marca">
                </div>
                <div class="mb-3">
                    <label for="modelo" class="form-label">Modelo</label>
                    <input type="text" class="form-control" id="IDmodelo" name="Modelo">
                </div>
                <div class="mb-3">
                    <label for="anio" class="form-label">Anio</label>
                    <input type="text" class="form-control" id="IDanio" name="Anio">
                </div>
                <div class="mb-3">
                    <label for="color" class="form-label">Color</label>
                    <input type="text" class="form-control" id="IDcolor" name="Color">
                </div>

                <input type="submit" value="Guardar" id="guardar" name="guardar" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>



<?php include("includes/footer.php") ?>