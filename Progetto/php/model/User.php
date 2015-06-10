<?php
    class User{
        
        const admin = 1;
        const utente = 2;
        
        private $email;
        private $password;
        private $nome;
        private $cognome;
        
        public function _construct(){
        }
        
        public function setEmail($email){
            $this->email = $email;
            return true;
        }
        
        public function getEmail(){
            return $this->email;
        }
        
        public function setPassword($password){
            $this->password = $password;
            return true;
        }
        
        public function getPassword(){
            return $this->password;
        }
        
        public function setNome($nome){
            $this->nome = nome;
            return true;
        }
        
        public function getNome(){
            return $this->nome;
        }
        
        public function setCognome($cognome){
            $this->nome = nome;
            return true;
        }
        
        public function getCognome(){
            return $this->cognome;
        }
        
        
    }
?>
