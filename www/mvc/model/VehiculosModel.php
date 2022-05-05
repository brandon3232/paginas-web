<?php

    class Vehiculos_model{

        private $db;
        private $vehiculo;
        
        public function __construct(){
            $this->db = conectar::conectar();
            $this->vehiculo = array();
        }

        public function get_vehiculos(){
            
            $sql = "SELECT * FROM vehiculos";
            $resultado = $this->db->query($sql);
            while ($row = $resultado->fetch_assoc()) {
                $this->vehiculo[]=$row;
            }
            return $this->vehiculo;
        }


        public function insertar($placa, $marca, $modelo, $anio, $color){

            $resultado = $this->db->query("INSERT INTO vehiculos (Placa, Marca, Modelo, Anio, Color) VALUES ('$placa', '$marca', '$modelo', '$anio', '$color')");
            
        }

        public function actualizar($id, $placa, $marca, $modelo, $anio, $color){

            $resultado = $this->db->query("UPDATE vehiculos SET Placa='$placa', Marca='$marca', Modelo='$modelo', Anio='$anio', Color='$color' WHERE id='$id'");
            
        }


        public function eliminar($id){

            $resultado = $this->db->query("DELETE FROM vehiculos WHERE id='$id'");
            
        }

        public function get_vehiculo($id){
            
            $sql = "SELECT * FROM vehiculos WHERE id='$id' LIMIT 1";
            $resultado = $this->db->query($sql);
            $row = $resultado->fetch_assoc();
            return $row;
        }

    }
