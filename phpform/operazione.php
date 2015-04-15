<?php
$primo = $_POST["primo"];
$secondo = $_POST["secondo"];
$operando = $_POST["operation"];

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

?>