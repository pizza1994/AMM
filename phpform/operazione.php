
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
        <?php
        if(!empty($_REQUEST["primo"])&&!empty($_REQUEST["secondo"])){
        $primo = $_REQUEST["primo"];
        $secondo = $_REQUEST["secondo"];
        $operando = $_REQUEST["operation"];

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
        }

        ?>
        <form action="operazione.php" method="post">
            Primo operando <br>
            <input type="text" name="primo" value=""<?= $_REQUEST["primo"] ?>/>
            <br>
            Secondo operando <br>
            <input type="text" name="secondo" value="<?= $_REQUEST["secondo"] ?>"/>
            <br>
            <input type="radio" name="operation" value="+">Somma<br>
            <input type="radio" name="operation" value="-">Sottrazione<br>
            <input type="radio" name="operation" value="x">Moltiplicazione<br>
            <input type="radio" name="operation" value="/">Divisione<br>
            <input type="submit" value="Submit">
        </form>

    </body>
</html>
