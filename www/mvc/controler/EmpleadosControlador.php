<?php

    class EmpleadosControlador{

        public function __construct(){
            require_once "model/EmpleadosModel.php";
        }


        public function index(){
            $empleados = new Empleados_model();
            $data["titulo"]="Empleados";
            $data["empleados"] = $empleados->get_empleados();
            require_once "view/empleados/empleados.php";

        }

        public function guarda(){
            
            if (isset($_POST['guardar']) && !empty($_POST['Nombre'] && !empty($_POST['Edad']))) {
                
                $nombre = $_POST['Nombre'];
                $edad = $_POST['Edad'];
    
                $empleados = new Empleados_model();
                $empleados->insertar($nombre, $edad);
    
                $_SESSION['mensaje'] = "persona agregada correctamente";
                $_SESSION['tipo_mensaje'] = "success";

                $data['titulo'] = "Empleados";
                $this->index();
            }else{
                $_SESSION['mensaje'] = "Hay campos vacios";
                $_SESSION['tipo_mensaje'] = "danger";
                $this->index();
            }
        }

        public function modificar($id){

            $empleados = new Empleados_model();
            $data['id'] = $id;
            $data['empleados'] = $empleados->get_empleado($id); 
            require_once "view/empleados/empleado_modificar.php";
        }

        public function actualizar(){

            $id = $_POST['id'];
            $nombre = $_POST['Nombre'];
            $edad = $_POST['Edad'];
            $empleados = new Empleados_model();
            $empleados->actualizar($id, $nombre, $edad);

            $data['titulo'] = "Empleados";
            $this->index();
        }

        public function eliminar($id){
            $empleados = new Empleados_model();
            $empleados->eliminar($id);

            $_SESSION['mensaje'] = "Empleado eliminado";
            $_SESSION['tipo_mensaje'] = "danger";

            $this->index();
        }
    }

?>