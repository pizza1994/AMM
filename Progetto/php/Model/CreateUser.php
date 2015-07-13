<?php
    
    include_once 'DB.php';

    class CreateUser{
        
        
        public static function creaUtente($newUser){
            $mysqli=DataBase::connect();
            if (!isset($mysqli)) {  
                $mysqli->close();
                return null;
            }
            $email = $newUser->getEmail();
            $username = $newUser->getUserName();
            $password = $newUser->getPassword();
            $nome = $newUser->getUserName();
            $cognome = $newUser->getCognome();
            $citta = $newUser->getCitta();
            
            $stmt = $mysqli->stmt_init();
            $query="SELECT COUNT(*) FROM Utente WHERE username=? OR email=?;";
            $stmt->prepare($query);
            $stmt->bind_param("ss", $username, $email);
            $stmt->execute();
            $stmt->bind_result($result);
            $stmt->fetch();
            $stmt->close();
            if($result == 0){
                $stmt = $mysqli->stmt_init();
                $query="INSERT INTO Utente(id, email, username, password, nome, cognome, citta) VALUES(DEFAULT, ?, ?, ?, ?, ?, ?);";
                $stmt->prepare($query);
                $stmt->bind_param("ssssss", $email, $username, $password, $nome, $cognome, $citta);
                $stmt->execute();
                $stmt->close();
                
            }
            $mysqli->close();
            
        }
        
    }

?>