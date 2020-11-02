<?php
    class Usuario{
        private $login;
        private $password;
        //getters  y setters
        public function getLogin(){
            return $this->login;
        }
        public function getPassword(){
            return $this->password;
        }
        public function setLogin(){
            $this->login = $login;
        }
        public function setPassword(){
            $this->password = $login;
        }
        public function __construct($login, $password){
            $this->login = $login;
            $this->password = $password;
        }
    }
?>