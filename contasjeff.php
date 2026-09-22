<?php 
$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];
$opcao = $_POST["opcao"];

function soma($numero1,$numero2){
$resultado = $numero1+$numero2;
return $resultado;
}


function subtracao($numero1,$numero2){
$resultado = $numero1-$numero2;
return $resultado;
}



function divisao($numero1,$numero2){
$resultado = $numero1/$numero2;
return $resultado;
}



function multiplicacao($numero1,$numero2){

$resultado = $numero1*$numero2;
return $resultado;
}


switch($opcao){
    case '+';
    echo "Resultado:" .soma($numero1,$numero2);
    break;
    
    case '-';
     echo "Resultado:" .subtracao($numero1,$numero2);
    break;
    
    case '/';
     echo "Resultado:" .divisao($numero1,$numero2);
    break;
    
    case '*';
     echo "Resultado:" .multiplicacao($numero1,$numero2);
    break;
}