<?php
function analisarNumero($numero){

    $dobro = $numero * 2;
    $triplo = $numero * 3;
    $quadrado = $numero * $numero;

    return[
        "numero" => $numero,
        "dobro" => $dobro,
        "triplo" => $triplo,
        "quadrado" => $quadrado,
        "situacao" => $situacao
    ];
};
$numero = 5;
$resultado = analisarNumero(numero);
echo "numero" . $resultado[$numero] . "<br>";
echo "dobro" . $resultado[$dobro] . "<br>";
echo "triplo" . $resultado[$triplo] . "<br>";
echo "quadraplo" . $resultado[$quadrado];
?>