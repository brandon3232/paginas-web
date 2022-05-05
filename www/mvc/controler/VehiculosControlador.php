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

        public function nuevo(){
            $data['titulo'] = "Vehiculos";
            require_once "view/vehiculos/vehiculo_nuevo.php";
        }

        public function guarda(){

            $placa = $_POST['Placa'];
            $marca = $_POST['Marca'];
            $modelo = $_POST['Modelo'];
            $anio = $_POST['Anio'];
            $color = $_POST['Color'];

            $vehiculos = new Vehiculos_model();
            $vehiculos->insertar($placa, $marca, $modelo, $anio, $color);

            $data['titulo'] = "Vehiculos";
            $this->index();
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