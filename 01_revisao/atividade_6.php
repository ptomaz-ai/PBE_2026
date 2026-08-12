<?php

$aluno = array [
    "paulo" => 8.0;
    "paula" => 8.0;
    "gargamel" => 8.0;
    "windisu" => 8.0;
];
media = 0;
$foreach ($aluno as $nome => $nota){
    echo "o aluno $nome, tirou a nota $media <br>";
}

$media = $media / 6;
echo "a media da turma é $media";



?>
