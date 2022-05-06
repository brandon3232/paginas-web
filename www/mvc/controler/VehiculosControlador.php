<?php

    class VehiculosControlador{

        public function __construct(){
            require_once "model/VehiculosModel.php";
        }


        public function index(){
            $vehiculos = new Vehiculos_model();
            $data["titulo"]="vehiculos";
            $data["vehiculos"] = $vehiculos->get_vehiculos();
            require_once "view/vehiculos/vehiculos.php";

        }

        public function guarda(){

            if (isset($_POST['guardar']) && !empty($_POST['Placa'] && !empty($_POST['Marca']) && !empty($_POST['Modelo']) && !empty($_POST['Anio']) && !empty($_POST['Color']))) {

                $placa = $_POST['Placa'];
                $marca = $_POST['Marca'];
                $modelo = $_POST['Modelo'];
                $anio = $_POST['Anio'];
                $color = $_POST['Color'];
    
                $vehiculos = new Vehiculos_model();
                $vehiculos->insertar($placa, $marca, $modelo, $anio, $color);
    
                $_SESSION['mensaje'] = "Vehiculo agregada correctamente";
                $_SESSION['tipo_mensaje'] = "success";

                $data['titulo'] = "Vehiculos";
                $this->index();
            }else {
                $_SESSION['mensaje'] = "Hay campos vacios";
                $_SESSION['tipo_mensaje'] = "danger";
                $this->index();
            }

        }

        public function modificar($id){

            $vehiculos = new Vehiculos_model();
            $data['id'] = $id;
            $data['vehiculos'] = $vehiculos->get_vehiculo($id); 
            require_once "view/vehiculos/vehiculo_modificar.php";
        }

        public function actualizar(){

            $id = $_POST['id'];
            $placa = $_POST['Placa'];
            $marca = $_POST['Marca'];
            $modelo = $_POST['Modelo'];
            $anio = $_POST['Anio'];
            $color = $_POST['Color'];
            $vehiculos = new Vehiculos_model();
            $vehiculos->actualizar($id, $placa, $marca, $modelo, $anio, $color);

            $data['titulo'] = "Vehiculos";
            $this->index();
        }

        public function eliminar($id){
            $vehiculos = new Vehiculos_model();
            $vehiculos->eliminar($id);
            $this->index();
        }
    }

?>