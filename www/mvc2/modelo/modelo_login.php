<?php

class Login_model{

    private $db;
    private $user;

     public function __construct(){
       $this->db=conectar::conecta();
      // $this->empleados=array();

     }

    public function get_user($u,$pa,$t){
        $sql="SELECT * FROM user WHERE usuario='$u' AND contra='$pa' AND tipo='$t'";
        $resultado=$this->db->query($sql);
        $row=$resultado->num_rows;
        return $row;
    }
}
    ?>