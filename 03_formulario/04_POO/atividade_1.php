<?php
class celular{
    public $marca;
    public $modelo;
    public $cor;
    public  $bateria;
    public  $ligado;

    function ligar(){
        $this->ligado = true;
        echo "o celular foi ligado";
    }
    function desligar(){
        $this-> ligado = false;
        echo "o celular foi desligado";
    }
    function usar(){
        $this->bateria = $this->bateria - $consumir;
        if($this->bateria  < 0){
            $this->bateria = 0;
        }    
        echo "A bateria foi consumida em $consumir <br>";
        echo "Sbrando um total de $this->$bateria ";
    }
    function carrega(){
         $this->bateria = $this->bateria - $carega;
         if($this->bateria  > 100){
            $this->bateria = 100;
        }
        echo "a bateria foi carregada $carga";
        echo "aumentando a bateria para $this->$bateria";
    }
}

$celular1 = new Celular();
$celular1->marca "Motorola";
$celular1->modelo "G9";
$celular1->cor = "preto";
$celular1->bateria = 50;
$celular1->ligado = true;

echo "Marca" $celular1->marca  <br>;
echo "modelo" $celular1->modelo <br;
echo "cor" $celular1->cor <br>;
echo "Bateria" $celular1->bateria <br>;
echo "ligado" $celular1->ligado <br>;


$celular1->carregar(33);
$celular1->carregar(12;)
$celular1->usar(12);
$celular1->desligar();


?>