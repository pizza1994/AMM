<?php
    
    class Admin extends User{
        
        const moderatore = "moderatore";
        const fullpower = "fullpower";
        
        private $admintype;
        
        public function _construct(){
            
        }
        
        public function setType($type){
            if($type==moderatore||$type==fullpower)
                $this->admintype = $type;
        }
        
        public function getType(){
            
            return $this->admintype;
        }
        
    }

?>