
<?php include("includes/header.php") ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php?controller=empleados&accion=index"><?php echo $data['titulo'] ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?controller=empleados&accion=nuevo">Agregar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-3">

    <div class="card  w-50">
        <div class="card-body">
            <form id="nuevo" name="nuevo" method="POST" action="index.php?controller=empleados&accion=actualizar" autocomplete="off">
                <input type="hidden" id="id" name="id" value="<?php echo $data['id']?>">
                <div class="mb-3">
                    <label for="placa" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="IDnombre" name="Nombre" value="<?php echo $data["empleados"]["nombre"] ?>">
                </div>
                <div class="mb-3">
                    <label for="marca" class="form-label">Edad</label>
                    <input type="text" class="form-control" id="IDedad" name="Edad" value="<?php echo $data["empleados"]["edad"] ?>">
                </div>

                <input type="submit" value="Guardar" id="guardar" name="guardar" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>



<?php include("includes/footer.php") ?>
