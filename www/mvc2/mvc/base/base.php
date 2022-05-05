<?php

class conectar{
    public static function conecta(){
     $conexion = new mysqli("localhost","root","","mvc2");
     return $conexion;
    }
}
   
?>