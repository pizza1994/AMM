<?php
$primo = $_POST["primo"];
$secondo = $_POST["secondo"];
$operando = $_POST["operation"];

switch ($operando){
    case "sum":
        $risultato = $primo+$secondo;
        break;
    case "sub":
        $risultato = $primo-$secondo;
        break;
    case "mol":
        $risultato = $primo*$secondo;
        break;
    case "div":
        $risultato = $primo/$secondo;
        break;
}
echo "$primo $operando $secondo = $risultato ";

?>