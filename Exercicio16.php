<?php

    $notas=[12,15,8,17,10];
    $soma=0;
    echo "As Notas Sao:  <br>";
    foreach($notas as $nota){
        echo $nota."<br>";
        $soma+=$nota;
    }
    $media=$soma/count($notas);

    echo "A soma e: ".$soma;
    echo "<br>";
    echo "A media e ".$media;

?>