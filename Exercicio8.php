<?php
    $cor="Azul";

    switch($cor){
        case "Azul":
            echo "Ganhou 200 pontos";
            break;
        case "Amarelo":
            echo "Ganhou 100 pontos";
            break;
        case "Verde":
            echo "Ganhou 50 pontos";
            break;
        default:
            echo "Nao Ganhou Pontos";
            break;
    }

?>