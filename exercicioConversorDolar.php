<?php

function converterParaDolar($valorMZN, $taxaCambio){
    $resultado= $valorMZN/$taxaCambio;
    return $resultado;
}

echo converterParaDolar(300,64.0);
echo "<br><br><br>";

$produtos = [ 
    "Computador" => 50000, 
    "Teclado" => 2500, 
    "Rato" => 1500 
]; 

foreach($produtos as $produto=>$preco){
    echo $produto." Custa ".$preco."MZN, oque equivale a ".converterParaDolar(5000,64)." USD <br>";
}

?>