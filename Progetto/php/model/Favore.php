<?php

    class Favore{
        
        private $descrizione;
        private $citta;
        private $indirizzo;
        private $data;
        private $utente;
        
        public function _construct(){
            
        }
        
        public function setDescrizione($descrizione){
            $this->descrizione = $descrizione;
        }
        public function getDescrizione(){
            return $this->descrizione;
        }
        
        public function setCitta($citta){
            $this->citta = $citta;
        }
        public function getCitta(){
            return $this->citta;
        }
        public function setIndirizzo($indirizzo){
            $this->indirizzo = $indirizzo;
        }
        public function getIndirizzo(){
            return $this->indirizzo;
        }
        
        public function setData($data){
            $this->data = $data;
        }
       
        public function getData(){
            return $this->data;
        }
        
        public function setUtente($utente){
            $this->citta = $citta;
        }
        public function getUtente(){
            return $this->utente;
        }
    }

?>