<?php

class Empleados_model{

    private $db;
    private $empleados;

     public function __construct(){
       $this->db=conectar::conecta();
       $this->empleados=array();

     }

    public function get_empleados(){
        $sql="SELECT * FROM empleados";
        $resultado=$this->db->query($sql);
        while($row=$resultado->fetch_assoc()){
            $this->empleados[]=$row;
        }
        return $this->empleados;
    }
}
    ?>