<?php

require_once "funcao.php";

$resultado = calcularPedido("teclado", 100, 5, 10, 20);

echo "Produto: " . $resultado["nome_produto"] . "<br>";
echo "Subtotal:  " . $resultado["subtotal"] . "<br>";
echo "Desconto:  " . $resultado["valor_desconto"] . "<br>";
echo "Imposto: " . $resultado["valor_imposto"] . "<br>";
echo "Total final:  " . $resultado["total_final"] . "<br>";

$total_comFrete = calculoDeFrete($resultado['totalFinal']);
echo ",total com frete". $total_comFrete;
?>