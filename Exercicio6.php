<?php

    $idade=60;
    if($idade<18){
        echo "Menor de Idade";
    }elseif($idade>18 && $idade<59){
        echo "Adulto";
    }else{
        echo "Idoso";
    }

?>