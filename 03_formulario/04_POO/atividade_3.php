<?php

class Aula{
    public $Diciplina;
    public $Professor;
    public $Duracao;
    public $n_sala;
    public $Bloco;

    function ExibirInformações(){
        echo "Diciplina": $this->Diciplina <br>;
        echo "Professor": $this->Professor <br>;
        echo "Duracao": $this->Duracao <br>;
        echo "n_sala": $this->n_sala <br>;
        echo "Bloco": $this->Bloco <br>;
    }
    function TrocarProfessor(nome_professor){
        $this->professor = $nome_professor;
        echo  "o nome do professor é $this->professor <br>";
    }
    function AlterarLocal($novo_bloco, $novo_numero_sala){
        $this->n_sala =  $novo_numero_sala;
        $this->Bloco = $novo_bloco;
    }
}
$aula1 = new Aula()
$aula1->Diciplina = "Programação";
$aula1->Professor = "Leonardo";
$aula1->Duracao = 4;
$aula1->n_sala = 2;
$aula1->Bloco = "Anexo";

$aula1->ExibirInformações();
echo "<hr>";
$aula1->TrocarProfessor("Gabriel");
echo "<hr>";
$aula1->AlterarLocal("B", 10);
echo "<hr>";
$aula1->ExibirInformações();