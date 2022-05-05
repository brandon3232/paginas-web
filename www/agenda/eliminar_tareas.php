<?php 

    include("bd.php");

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM tareas WHERE id = $id";
        $resultado = mysqli_query($conn, $query);
        if (!$resultado) {
            die("consulta fallida");
        }

        $_SESSION['mensaje'] = 'tarea eliminada correctamente';
        $_SESSION['tipo_mensaje'] = 'danger';
        header("Location: index.php"); 
    }

?>