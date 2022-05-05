<?php
class VehiculosControl{

    public function __construct(){
        require_once "modelo/modelo.php";
    }

public function index(){
   
    $vehiculos = new Vehiculos_model();
    $data["titulo"]="Vehiculos";
    $data["vehiculos"]=$vehiculos->get_vehiculos();
    require_once "vista/vehiculos.php";

}

public function nuevo()
{
    $data['titulo']="Vehiculos";
    require_once "vista/vehiculo_nuevo.php";   
 
}

public function guarda(){
    
    $placa= $_POST['numplaca'];
    $marca=$_POST['marca'];
    $modelo= $_POST['modelo'];
    $anio= $_POST['anios'];
   $color=$_POST['color'];
   $vehiculos = new Vehiculos_model();
   $vehiculos->insertar($placa,$marca,$modelo,$anio,$color);
   $data["titulo"]="Vehiculos";
   $this->index();

}

public function eliminar($id){
    
    $vehiculos=new Vehiculos_model();
    $vehiculos->eliminar($id);
    $data["titulo"]="Vehiculos";
   $this->index();


}
public function modificar($id){
 $vehiculos = new Vehiculos_model();
 $data["vehiculos"]=$vehiculos->get_vehiculo($id);
 require_once "vista/vehiculos_modifica.php";
      
}

public function actualizar(){
    $id=$_POST["id"];
    $placa=$_POST["placa"];
    $marca=$_POST["marca"];
    $mode=$_POST["modelo"];
    $anio=$_POST["anio"];
    $color=$_POST["color"];

    $vehiculos= new Vehiculos_model();
    $vehiculos->modificar($id,$placa,$marca,$mode,$anio,$color);
    $data["titulo"]="Vehiculos";
    $this->index();

}



}
?>