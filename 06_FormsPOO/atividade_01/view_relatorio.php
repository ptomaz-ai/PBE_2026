<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Relatório</title>
</head>
<body>
    <h1>produto Cadastrado</h1>
    <p>Nome: <?= $produto->getNome() ?></p>
    <p>Quantidade: <?= $produto->getQuantidade() ?></p>
    <p>Preço: <?= $produto->getPreco() ?></p>
    <p>Total em estoque: <?= $produto->calculoTotal() ?></p>
    <p>desconto: <?= number_format($produto->carcularDesconto(),2, ",",".")?></p>
    <p>total com desconto <?= number_format($produto->calcularTotalComDesconto(),2, ",",".")?></p>
    <p>situação do estoque: <?= $produto->verificarEstoque()?></p>

    <?php if($produto->carcularDesconto() > 10): ?>
        <p>Parabéns Você ganhou 10% de desconto</p>
    <?php else: ?>
        <p>Dica: comprando 10 unidades ou mais voçê ganha 10% de desconto</p>
    <?php endif ?>

    <a href="view.php">Cadastrar outor</a>
</body>
</html>