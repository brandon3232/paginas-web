<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>


    <div class="container d-flex justify-content-center">

        <div class="d-flex flex-column ">

            <?php
            if (isset($_GET['error']) == "si") { ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                Error en usuario y/o contraseña
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } else { ?>
                <h1>INICIAR SESIÓN</h1>
            <?php } ?>

            <div class="card card-body">

                <form action="carga.php?c=login&a=index" method="POST">

                    <div class="mb-3">
                        <label class="form-label" for="nom">Usuario</label>
                        <input class="form-control" type="text" id="nom" name="nombre"><br>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="con">Contraseña</label>
                        <input class="form-control" type="password" id="con" name="pas"> <br>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="con">Tipo de usuario</label>
                        <input class="form-control" type="text" id="usu" name="tipo"> <br>
                    </div>
                    <input type="submit" value="Enviar" class="btn btn-primary">
                </form>

            </div>

        </div>

    </div>
</body>

</html>