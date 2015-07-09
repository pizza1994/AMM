<?php
    include_once dirname(__FILE__) . '/php/Controller/NotLoggedController.php';    
    
    $_REQUEST["cmd"]="NotLogged";
    $NotLoggedController = new NotLoggedController();
    $NotLoggedController->invoke($_REQUEST);
    
 
?>