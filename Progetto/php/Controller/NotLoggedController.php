<?php
    include_once dirname(__File__) . '/../View/ViewDescriptor.php';
    //include_once basename(__DIR__) . '/../model/User.php';  
    
    
    class NotLoggedController{
        
        public function _construct(){
            
        }
        
        public function invoke($request){
            
            $view = new ViewDescriptor();
            //$view->setPagina($request["pagina"]);
            if($request["cmd"]=="NotLogged"){
                $this->showHomePage($view);
            }
            require dirname(__FILE__) . '/../View/Master.php';
        }
        
        public function showHomePage($view){
            $view->setTitle("Welcome");
            $view->setHeader(dirname(__FILE__) . '/../View/Login/Header.php');
            
        }
    }
?>
