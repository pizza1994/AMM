<?php
$primo = $POST["primo"];
$secondo = $POST["secondo"];
$operando = $POST["operando"];

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
echo '$primo $operando $secondo = $risultato ';

?>