<?php
    class LoginControl{
        public function __construct(){
            require_once "modelo/modelo_login.php";
        }

        public function index(){
            $user=$_POST['nombre'];
            $pas=$_POST['pas'];
            $tipo=$_POST['tipo'];

            $usuario = new Login_model();
            //$data["titulo"]="Empleados";
            $data=$usuario->get_user($user,$pas,$tipo);

            if($data==1){
                if($tipo==1){
                    require_once "vista/menu.php";
                }
                else{
                    require_once "carga_cliente.php";
                }
                //require_once "vista/menu.php";
            }
            else{
                header("Location:index.php?error=si");
            }
            //require_once "vista/EMPLEADOS/empleados.php";

        }
    }
?>