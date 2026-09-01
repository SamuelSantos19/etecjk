<?php
$numero1 = $_GET["numero1"];
$numero2 = $_GET["numero2"];
$conta = $_GET["conta"];
switch ($conta) {
case 1: $resultado = $numero1 + $numero2;
break;
case 2: $resultado = $numero1 - $numero2;
break;
case 3:  if ($numero2 == 0) {
            $resultado = "Não existe";
        } else {
            $resultado = $numero1 / $numero2; 
        }
break;
case 4: $resultado = $numero1 * $numero2;
break;}
echo $resultado;
?>