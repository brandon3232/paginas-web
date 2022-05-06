<?php include("includes/header.php") ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php?controller=vehiculos&accion=index"><?php echo $data['titulo'] ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?controller=empleados&accion=index">Empleados</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container vh-100">


  <div class="row mt-5">

    <div class="col-12 col-md-10 col-lg-4">

      <?php if(isset($_SESSION['mensaje'])){ ?>

        <div class="alert alert-<?= $_SESSION['tipo_mensaje']; ?> alert-dismissible fade show" role="alert">
          <?= $_SESSION['mensaje'] ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

      <?php session_unset(); } ?>


      <div class="card ">
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

    <div class="col-12 col-lg-8">
      <table class="table table-striped table-light">
          <thead>
              <tr>
                  <th>Placa</th>
                  <th>Marca</th>
                  <th>Modelo</th>
                  <th>Anio</th>
                  <th>Color</th>
                  <th>Accion</th>
              </tr>
          </thead>
          <tbody>
    
              <?php
              foreach ($data["vehiculos"] as $dato) {
    
    
                  echo "<tr>";
    
                  echo "<td>" . $dato["Placa"] . "</td>";
                  echo "<td>" . $dato["Marca"] . "</td>";
                  echo "<td>" . $dato["Modelo"] . "</td>";
                  echo "<td>" . $dato["Anio"] . "</td>";
                  echo "<td>" . $dato["Color"] . "</td>";
                  echo "<td>";
                  echo "<button class=\"btn btn-success me-1\"><a class=\"text-light\" href='index.php?controller=vehiculos&accion=modificar&id=".$dato["id"]."'><i class=\"fa-solid fa-pen\"></i> </a></button>"; 
    
                  
                  echo "<button class=\"btn btn-danger\"><a class=\"text-light\" href='index.php?controller=vehiculos&accion=eliminar&id=".$dato["id"]."'><i class=\"fa-solid fa-trash\"></a></button>";
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