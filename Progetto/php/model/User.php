<?php
    class User{
        
        const admin = 1;
        const utente = 2;
        
        
        private $password;
        private $username;
        
        
        public function _construct(){
        }
        
        public function setPassword($password){
            $this->password = $password;
            return true;
        }
        
        public function getPassword(){
            return $this->password;
        }
        
        public function setUserName($username){
            $this->nome = nome;
            return true;
        }
        
        public function getUserName(){
            return $this->username;
        }
        
    }
?>
