<?php

class Vehiculos_model{

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
    public function eliminar($id){
       $resultado=$this->db->query("DELETE FROM vehiculos WHERE id='$id'");
        
    }

    public function modificar($id,$p,$ma,$mo,$a,$c){

       $resultado=$this->db->query("UPDATE  vehiculos SET Placa='$p',Marca='$ma', Modelo='$mo',
       anio='$a', color='$c' WHERE id='$id'");
        
    }
    
    public function get_vehiculo($id){
        $sql="SELECT * FROM vehiculos WHERE id='$id' LIMIT 1";
        $resultado=$this->db->query($sql);
        $row=$resultado->fetch_assoc();
        return $row;

    }


    

}
?>