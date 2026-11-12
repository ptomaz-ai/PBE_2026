<?php
class Produto{
    private $nome;
    private $quantidade;
    private $preco;

    public function __construct($nome, $quantidade, $preco) {
        $this->nome = $nome;
        $this->quantidade = $quantidade;
        $this->preco = $preco;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getQuantidade(){
    return $this->quantidade;
    }
    public function getPreco(){
        return $this->preco;
    }
    public function calculoTotal(){
        return $this->preco + $this->quantidade;
    }
    public function carcularDesconto(){
        if($this->quantidade >= 10){
            return $this->calculoTotal() * 0.10;
        }else{
            return 0;
        }
    }
    public function calcularTotalComDesconto(){
        return $this->calculoTotal() - $this->;carcularDesconto();
    }
    public function verificarEstoque(){
        if($this->quantidade < 5;){
            return "Estoque baixo";
        }
        return "estoque nolmal";
    }

}
?>
