<?php

class EmpleadosControl{

public function __construct(){
    require_once "modelo/modelo_empleados.php";
}

public function index(){

$empleado = new Empleados_model();
$data["titulo"]="Empleados";
$data["empleados"]=$empleado->get_empleados();
require_once "vista/EMPLEADOS/empleados.php";

}
}
?>