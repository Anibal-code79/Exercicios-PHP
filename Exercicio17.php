<?php

    $notas=[12,15,8,17,10];
    $soma=0;
    echo "As Notas: ";
    foreach($notas as $nota){
        echo $nota."<br>";
        $soma=+$nota;
    }

    $media=$soma/count($notas);
    if($media>=10){
        echo "Aprovado";
    }else{
        echo "Reprovado";
    }
?>