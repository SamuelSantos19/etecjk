<?php
$numero1 = $_GET["numero1"];
$numero2 = $_GET["numero2"];
$opcao = $_GET["opcao"];
switch ($opcao) {
case 1: $resultado = $numero1 + $numero2;
break;
case 2: $resultado = $numero1 - $numero2;
break;
case 3: $resultado = $numero1 / $numero2;
break;
case 4: $resultado = $numero1 * $numero2;
break;}
echo $resultado;
?>