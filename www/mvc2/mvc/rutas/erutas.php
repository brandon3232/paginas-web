<?php

     function cargarControlador($controlador){
         $nombreControlador=ucwords($controlador)."Control";
         $archivoControlador="controlador/".ucwords($controlador).".php";
         
           if (!is_file($archivoControlador)){
            $archivoControlador="controlador/"."vehiculos.php";
           }
        require_once $archivoControlador;
          $control= new $nombreControlador;
         return $control;
     }

     function cargarAccion($controladdor,$accion,$id=null){
         if(isset($accion) && method_exists($controladdor,$accion)){
            if($id==null){
                $controladdor->$accion();
            }
             else {
                 $controladdor->$accion($id); 
                }
         }

     }



?>
