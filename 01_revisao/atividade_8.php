<?php
$idade = 16;
$acompanhante = true;

if ($idade >= 18){
    echo "entrada altorizada";
}
elseif ($idade >= 14 
    && <= 17 
    && $acompanhante == true){
    echo "entrada altorizada";
}
else{
    echo "voçê não pode entrar";
}


?>