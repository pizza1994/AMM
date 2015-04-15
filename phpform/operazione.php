<?php
$primo = $_POST["primo"];
$secondo = $_POST["secondo"];
$operando = $_POST["operation"];

$val1= filter_var($primo, FILTER_VALIDATE_FLOAT, FILTER_NULL_ON_FAILURE);
$val2= filter_var($secondo, FILTER_VALIDATE_FLOAT, FILTER_NULL_ON_FAILURE);

if($val1&&$val2){
    
    switch ($operando){
        case "+":
            $risultato = $primo+$secondo;
            break;
        case "-":
            $risultato = $primo-$secondo;
            break;
        case "x":
            $risultato = $primo*$secondo;
            break;
        case "/":
            $risultato = $primo/$secondo;
            break;
    }
    echo "$primo $operando $secondo = $risultato ";
}
else{
    echo "Qualcosa non va";
}

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="index.html" method="get">
            <input type="submit" value="Riprova">
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
