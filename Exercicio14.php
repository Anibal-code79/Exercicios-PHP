<?php

$frutas=["Manca", "Banana", "Laranja", "Uva"];

foreach($frutas as $fruta){
    echo $fruta."<br>";
}

foreach($frutas as $indice => $fruta){
    echo "Fruta na Posicao ".$indice.": ".$fruta."<br>";
}


?>