<?php
    function verifiqueMaioridade ($idade){
    if($idade => 18){
         return "Maior idade";
    }else{
        return "Menor de idade";
    }
}
$idade1 = 15;
$idade2 = 45;
$idade3 = 18;

$resultado = verifiqueMaioridade(15);
echo "a idade $idade1 é $resultado <br>";

$resultado = verifiqueMaioridade(45);
echo "a idade $idade2 é $resultado <br>";

$resultado = verifiqueMaioridade(18);
echo "a idade $idade3 é $resultado <br>";

?>