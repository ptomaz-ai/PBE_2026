<?php

$idades = [18,8,14,71,12,19,21,10,87];
$media = 0;
$maioridade = 0;
$soma = 0;

foreach ($idades as $idade){
    $soma += $idade;

    if($idade >= 18){
        $maioridade += 1;
    }
}

$media = $soma / count($idades);

echo "media das idades: ". $media . "<br>";
echo "Pessoas com 18 anos ou mais: ". $maioridade;

?>
