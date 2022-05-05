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

        public function nuevo(){
            $data['titulo'] = "Empleados";
            require_once "view/empleados/empleado_nuevo.php";
        }

        public function guarda(){

            $nombre = $_POST['Nombre'];
            $edad = $_POST['Edad'];
            

            $empleados = new Empleados_model();
            $empleados->insertar($nombre, $edad);

            $data['titulo'] = "Empleados";
            $this->index();
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
            $this->index();
        }
    }

?>