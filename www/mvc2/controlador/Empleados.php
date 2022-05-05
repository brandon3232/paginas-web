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

public function nuevo()
{
    $data['titulo']="Empleados";
    require_once "vista/EMPLEADOS/empleados_nuevo.php";   
 
}

public function guarda(){
    
    $nombre= $_POST['nombre'];
    $edad=$_POST['edad'];
    
   $empleados = new Empleados_model();
   $empleados->insertar($nombre,$edad);
   $data["titulo"]="Empleados";
   $this->index();

}

public function eliminar($id){
    
    $empleados=new Empleados_model();
    $empleados->eliminar($id);
    $data["titulo"]="Empleados";
   $this->index();


}
public function modificar($id){
 $empleados = new Empleados_model();
 $data["Empleados"]=$empleados->get_empleado($id);
 require_once "vista/EMPLEADOS/empleados_modifica.php";
      
}

public function actualizar(){
    $id=$_POST["id"];
    $nombre=$_POST["nombre"];
    $edad=$_POST["edad"];
    
    $empleados= new Empleados_model();
    $empleados->modificar($id,$nombre,$edad);
    $data["titulo"]="Empleados";
    $this->index();

}

}
?>