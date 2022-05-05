<?php
class ClienteControl{

public function index(){
    require_once "modelo/modelo_cliente.php";
    $vehiculos = new Cliente_model();
    $data["titulo"]="Vehiculos";
    $data["vehiculos"]=$vehiculos->get_vehiculos();
    require_once "vista/cliente.php";

}




}
?>