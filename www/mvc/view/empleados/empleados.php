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
          <a class="nav-link" aria-current="page" href="index.php?controller=vehiculos&accion=index">Vehiculos</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container vh-100">
  <div class="row mt-5">

  <div class="col-12 col-md-8 col-lg-4">

    <?php if(isset($_SESSION['mensaje'])){ ?>

      <div class="alert alert-<?= $_SESSION['tipo_mensaje']; ?> alert-dismissible fade show w-75" role="alert">
        <?= $_SESSION['mensaje'] ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

    <?php session_unset(); } ?>      



    <div class="card">
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

    <div class="col-12 col-md-12 col-lg-8">
      <table class="table table-striped table-light w-100">
          <thead>
              <tr>
                  <th scope="col">Nombre</th>
                  <th scope="col">Edad</th>
                  <th scope="col">Acciones</th>
              </tr>
          </thead>
          <tbody>

              <?php
              foreach ($data["empleados"] as $dato) {


                  echo "<tr scope='row'>";

                  echo "<td>" . $dato["nombre"] . "</td>";
                  echo "<td>" . $dato["edad"] . "</td>";
                  echo "<td>";
                  echo "<button class=\"btn btn-success me-1\"><a class=\"text-light\" href='index.php?controller=empleados&accion=modificar&id=".$dato["id"]."'><i class=\"fa-solid fa-pen\"></i> </a></button>"; 
  
                  
                  echo "<button class=\"btn btn-danger\"><a class=\"text-light\" href='index.php?controller=empleados&accion=eliminar&id=".$dato["id"]."'><i class=\"fa-solid fa-trash\"></a></button>";
                  echo "</td>";

                  echo "</tr>";
              }
              ?>


          </tbody>
      </table>
    </div>
  </div>
</div>

<?php include("includes/footer.php") ?>