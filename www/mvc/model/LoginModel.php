<?php

    class Login_model{

        private $db;
        private $user;
        
        public function __construct(){
            $this->db = conectar::conectar();
            $this->user = array();
        }

        public function get_user($user, $password){
            
            $sql = "SELECT * FROM user WHERE user='$user' AND password='$password'";
            $resultado = $this->db->query($sql);
            $row = $resultado->num_rows;
            return $row;
        }
    }
