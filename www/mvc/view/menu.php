<?php include("includes/header.php") ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Menu</a>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-5">
            <div class="contenedor">
                <a href="index.php?controller=vehiculos&accion=index">
                    <div class="img img-thumbnail shadow-lg img-vehiculos"></div>
                </a>
                <a href="index.php?controller=empleados&accion=index">
                    <div class="img img-thumbnail shadow-lg img-trabajadores"></div>
                </a>
            </div>
        </div>
    </div>


<?php include("includes/footer.php") ?>