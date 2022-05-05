<?php

    class Empleados_model{

        private $db;
        private $empleados;
        
        public function __construct(){
            $this->db = conectar::conectar();
            $this->empleado = array();
        }

        public function get_empleados(){
            
            $sql = "SELECT * FROM empleados";
            $resultado = $this->db->query($sql);
            while ($row = $resultado->fetch_assoc()) {
                $this->empleados[]=$row;
            }
            return $this->empleados;
        }


        public function insertar($nombre, $edad){

            $resultado = $this->db->query("INSERT INTO empleados (nombre, edad) VALUES ('$nombre', '$edad')");
            
        }

        public function actualizar($id, $nombre, $edad){

            $resultado = $this->db->query("UPDATE empleados SET nombre='$nombre', edad='$edad' WHERE id='$id'");
            
        }


        public function eliminar($id){

            $resultado = $this->db->query("DELETE FROM empleados WHERE id='$id'");
            
        }

        public function get_empleado($id){
            
            $sql = "SELECT * FROM empleados WHERE id='$id' LIMIT 1";
            $resultado = $this->db->query($sql);
            $row = $resultado->fetch_assoc();
            return $row;
        }

    }
