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

<div class="container vh-100">
    <table class="table table-striped table-light">
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

<?php include("includes/footer.php") ?>