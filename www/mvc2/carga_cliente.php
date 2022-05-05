<?php
require_once "base/base.php";
require_once "rutas/erutas.php";
require_once "controlador/Cliente.php";



   
       $control = new ClienteControl;
       $control->index();
    



?>