<?php

    include("bd.php");
    
    if (isset($_POST['guardar_tareas'])){
        
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];

        $consulta = "INSERT INTO tareas(titulo, descripcion) VALUES ('$titulo', '$descripcion')";

        $resultado = mysqli_query($conn, $consulta);

        if (!$resultado) {
            die("Fallo la consulta");
        }

        $_SESSION['mensaje'] = 'tarea guardada correctamente';
        $_SESSION['tipo_mensaje'] = 'success';

        header("Location: index.php");
    }

?>