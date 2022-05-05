<?php

    class conectar{
        public static function conectar(){
            $conexion = new mysqli("localhost","root","","mvc");
            return $conexion;
        }
    }
 ?>