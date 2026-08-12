<?php
$operacao = "+";
$numero1 = "2";
$numero2 = "4";
$valor = "0";

switch ($operacao){

    case "+":
        $valor = $numero1 + $numero2;
        echo $valor;
        break;

    case "-":
     $valor = $numero1 - $numero2;
        echo $valor;
        break;

    case "*":
     $valor = $numero1 * $numero2;
        echo $valor;
        break;

    case "/":
     $valor = $numero1 / $numero2;
        echo $valor;
        break;
        
        default:
    echo "A conta é conta";
}
