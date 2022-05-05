<?php

class Cliente_model{

    private $db;
    private $vehiculo;

     public function __construct(){
       $this->db=conectar::conecta();
       $this->vehiculo=array();

     }

    public function get_vehiculos(){
        $sql="SELECT * FROM vehiculos";
        $resultado=$this->db->query($sql);
        while($row=$resultado->fetch_assoc()){
            $this->vehiculo[]=$row;
        }
        return $this->vehiculo;
    }
     
    public function insertar($pla, $mod,$mar,$anio,$color){
        $resultado=$this->db->query("INSERT INTO vehiculos (Placa, Modelo, Marca, anio, color) values ('$pla','$mod','$mar','$anio','$color')");

    }

    public function modificar(){
        
    }


    

}
?>