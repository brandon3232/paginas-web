<?php

    class LoginControlador{

        public function __construct(){
            require_once "model/LoginModel.php";
        }


        public function index(){

            $user = $_POST['Nombre'];
            $password = $_POST['Password'];


            $usuario = new Login_model();
            $data = $usuario->get_user($user, $password);

            if ($data >= 1) {
                require_once "view/menu.php";
            }else {
                
            $_SESSION['mensaje'] = "El usuario y/o la contrasenia estan equivocados";
            $_SESSION['tipo_mensaje'] = "danger";

                require_once "view/login.php";              
            }

        }
    }
?>