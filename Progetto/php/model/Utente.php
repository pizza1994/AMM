<?php

    class Utente extends User{
        
        private $email;
        private $nome;
        private $cognome;
        private $citta;
        
        public function _construc(){
        
        }
        
        public function setCitta($citta){
            $this->citta = $citta;
        }
        
        public function getCitta(){
            return $this->citta;
        }
        
        
        public function setCognome($cognome){
            $this->cognome = $cognome;
            return true;
        }
        
        public function getCognome(){
            return $this->cognome;
        }
        
        public function setNome($nome){
            $this->nome = nome;
            return true;
        }
        
        public function getNome(){
            return $this->nome;
        }
        
        public function setEmail($email){
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                $this->email = $email;
                return true;
            }
            return false;
        }
        
        public function getEmail(){
            return $this->email;
        }
    
    }

?>