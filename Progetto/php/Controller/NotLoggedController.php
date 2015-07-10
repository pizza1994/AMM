<?php
    include_once dirname(__File__) . '/../View/ViewDescriptor.php';
    include_once dirname(__File__) . '/../Controller/UserController.php';
    include_once dirname(__File__) . '/../Controller/AdminController.php';
    include_once dirname(__File__) . '/../Model/CreateUser.php';
    include_once dirname(__File__) . '/../Model/Utente.php';
    include_once dirname(__FILE__) . '/../../index.php';

    //include_once basename(__DIR__) . '/../model/User.php';  
    
    
    class NotLoggedController{
        
 
        
        public function _construct(){
        }
        
        public function invoke($request){
            
            $view = new ViewDescriptor();
            
            if($request["cmd"]=="NotLogged"){
               
                $this->showHomePage($view);
            }
            
            if($request["cmd"]=="SigningUser"){
                $newUser = new Utente();
                $newUser->setUserName($request["username"]);
                $newUser->setEmail($request["email"]);
                $newUser->setNome($request["nome"]);
                $newUser->setCognome($request["cognome"]);
                $newUser->setPassword($request["password"]);
                $newUser->setCitta($request["citta"]);
                CreateUser::creaUtente($newUser);
                $this->showUserPage($view);
            }
            
            if($request["cmd"]=="LoggingUser"){
                
                $this->showUserPage($view);
            }
            
            require dirname(__FILE__) . '/../View/Master.php';
        }
        
        public function showHomePage($view){
            $view->setTitle("Welcome");
            $view->setHeader(dirname(__FILE__) . '/../View/Login/Header.php');
            //$view->setFooter(dirname(__FILE__) . '/../View/Login/Footer.php');
            $view->setRightContent(dirname(__FILE__) . '/../View/Login/RightContent.php');
            $view->setLeftMenu(dirname(__FILE__) . '/../View/Login/LeftMenu.php');
            
        }
        
        public function showUserPage($view){
            $view->setTitle("Welcome zio");
            $view->setHeader(dirname(__FILE__) . '/../View/Utente/Header.php');
            //$view->setFooter(dirname(__FILE__) . '/../View/User/Footer.php');
            $view->setRightContent(dirname(__FILE__) . '/../View/Utente/RightContent.php');
            $view->setLeftMenu(dirname(__FILE__) . '/../View/Utente/LeftMenu.php');
            
        }
        
        public function showAdminPage($view){
            $view->setTitle("Welcome ZIO");
            $view->setHeader(dirname(__FILE__) . '/../View/Admin/Header.php');
            //$view->setFooter(dirname(__FILE__) . '/../View/Admin/Footer.php');
            $view->setRightContent(dirname(__FILE__) . '/../View/Admin/RightContent.php');
            $view->setLeftMenu(dirname(__FILE__) . '/../View/Admin/LeftMenu.php');
            
        }
        
    }
?>
