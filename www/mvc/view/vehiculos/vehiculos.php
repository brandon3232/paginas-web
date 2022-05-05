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
          <a class="nav-link active" aria-current="page" href="index.php?controller=vehiculos&accion=nuevo">Agregar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container vh-100">
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

<?php include("includes/footer.php") ?>