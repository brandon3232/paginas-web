<?php

class conectar{
    public static function conecta(){
     $conexion = new mysqli("localhost","root","","mvc");
     return $conexion;
    }
}
   
?>
