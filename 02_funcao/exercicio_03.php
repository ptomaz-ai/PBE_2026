<?php
    function analisarNumero($numero){

    $dobro = $numero * 2;
    $triplo = $numero * 3;
    $quadrado = $numero * $numero;

    return[
        "dobro" => $dobro,
        "triplo" => $triplo,
        "quadrado" => $quadrado
    ];
};

$resultado = analisarNumero(100);
echo "dobro" . $resultado[$dobro] . "<br>";
echo "triplo" . $resultado[$triplo] . "<br>";
echo "quadraplo" . $resultado[$quadrado];
?>