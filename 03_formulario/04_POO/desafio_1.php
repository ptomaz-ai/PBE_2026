<?php

class Pedido{
    private $cliente;
    private $valorItens;

    public function __construct($cliente, $valorItens = 0) {
        $this->cliente = $cliente;
        $this->valorItens = $valorItens;
    }
    public function adicionarIntem($valor){
        $this->valorItens += $valor;
    }
    public function getTotal(){
        return $this->valorItens;
    }
    public function exibirPedido(){
        echo "cliente: $this->cliente total dos Itens: $this->valorItens <br>";
    }

}
class NotaFiscal{
    private $totalPedido;
    private $$imposto;
    private $TotalPagar;

    public function __construct($totalPedido, $imposto = 10) {
        $this->totalPedido = $totalPedido;
        $this->imposto = $imposto;
        $this->$TotalPagar = 0;
    }
       
        public function calcularTotal(){
            $this->TotalPagar = ($this->totalPedido + ($this->imposto / 100;));
    }
    public function exibirPedido(){
        echo "Subtotal: R$ $this->totalPedido <br>";
        echo "Imposto: $this->imposto %<br>";
        echo "Total Pagar: R$ $this->totalPagar";
    }

}
$pedido = new pedido("Pedro", 20);
$pedido->adicionarIntem(50)
$pedido->adicionarIntem(27);
echo $pedido->exibirPedido();