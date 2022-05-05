<?php
require_once "base/base.php";
require_once "rutas/erutas.php";
require_once "controlador/Vehiculos.php";
require_once "controlador/Empleados.php";

if(isset($_GET['c'])){
    $controlador=cargarControlador($_GET['c']);
    if(isset($_GET['a'])){
        if(isset($_GET['id'])){
            cargarAccion($controlador,$_GET['a'],$_GET['id']);

        }
       else{
        cargarAccion($controlador,$_GET['a']);
       } 
    }
}
else
   {
       $control = new VehiculosControl;
       $control->cliente();
    }



?>