<?php

    class Login{
        
        public function  _construct(){
            
        }
        
        public static function getLogin($request){            
            
            $username = $request["username"];
            $password = $request["password"];
            $result = false;
            
            $mysqli=DataBase::connect();
            if (!isset($mysqli)) {  
                $mysqli->close();
                return null;
            }
            
            $stmt = $mysqli->stmt_init();
            $query = "SELECT * FROM Utente WHERE username=? AND password=?";
            $stmt->prepare($query);
            $stmt->bind_param("ss", $username, $password);
            $stmt->execute();
            $stmt->store_result();
            if($stmt->num_rows !=0 ){
                $result = true;
            }
            $stmt->close();
            $mysqli->close();

            return $result;
            
            
            
        }
        
    }
?>