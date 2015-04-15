<?php
$primo = $_POST["primo"];
$secondo = $_POST["secondo"];
$operando = $_POST["operation"];

$val1= filter_var($primo, FILTER_VALIDATE_FLOAT, FILTER_NULL_ON_FAILURE);
$val2= filter_var($secondo, FILTER_VALIDATE_FLOAT, FILTER_NULL_ON_FAILURE);

if($val1&&$val2){
    echo("entra");
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