<?php include("bd.php") ?>

<?php include("includes/header.php") ?>
    
    <div class="container">


            <div class="col-md-4">
                <div class="form">
                    <?php if(isset($_SESSION['mensaje'])) { ?>
                        <div class="alert alert-<?= $_SESSION['tipo_mensaje']; ?>  alert-dismissible fade show" role="alert">
                        <?= $_SESSION['mensaje'] ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                        </button>
                        </div>
                    <?php session_unset(); } ?>

                    <div class="card">
                        <form action="guardar_tareas.php" method="POST">
                            <div class="form-group">
                                <input type="text" name="titulo" class="form-control" placeholder="Titulo de tarea" autofocus>
                            </div>

                            <div class="form-group">
                                <textarea name="descripcion" rows="2" class="form-control" placeholder="Descripcion de tarea"></textarea>
                            </div>

                            <input type="submit" class="btn btn-success" name="guardar_tareas" value="Guardar tareas">
                        
                        </form>
                    </div>
                </div>
                <div class="contenedor-tabla">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>titulo</th>
                                <th>descripcion</th>
                                <th>fecha de creacion</th>
                                <th>acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $query = "SELECT * FROM tareas";
                                $resultados_tareas = mysqli_query($conn, $query);

                                while($row = mysqli_fetch_array($resultados_tareas)){ ?>

                                    <tr>
                                        <td class="titulo"> <?php echo $row['titulo'] ?> </td>
                                        <td class="descripcion"> <?php echo $row['descripcion'] ?> </td>
                                        <td class="fecha"> <?php echo $row['fecha_de_creacion'] ?> </td>
                                        <td class="acciones">
                                            <a href="edit_tareas.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                                                <i class="fa fa-marker"></i>
                                            </a>
                                            <a href="eliminar_tareas.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                                                <i class="fa fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>

                                <?php } ?>
                            
                        </tbody>
                    </table>
                </div>

            </div>
            <i class="fa-solid fa-xmark-large"></i>

        

    </div>

<?php include("includes/footer.php") ?>
