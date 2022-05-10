<?php include("includes/header.php") ?>

<div class="container">
    <div class="row mt-5 d-flex justify-content-center">
        <div class="col-6">


            <?php if (isset($_SESSION['mensaje'])) { ?>

                <div class="alert alert-<?= $_SESSION['tipo_mensaje']; ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['mensaje'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            <?php session_unset();
            } ?>

            <div class="card card-body">
                <h1 class="mb-3 text-center">login</h1>
                <form action="index.php?controller=login&accion=index" method="POST" autocomplete="off">
                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="Nombre">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="Password">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>
</div>

<?php include("includes/footer.php") ?>