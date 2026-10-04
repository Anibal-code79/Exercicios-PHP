<?php

    function transformarMaiucusla($texto){
        //Transformar em Maiucula
        return strtoupper($texto);
    }

    function quantidadeCaracteres($texto){
        //Tamanho de caracteres
        return strlen($texto);
    }

    function calcularRAizquadrada($numero){
        return sqrt($numero); 
    }
    echo "Transformar conjunto de caracteres em Maiucula: ".transformarMaiucusla("anibal")."<br>";
    echo "Tamanho da Array <br>";
    echo quantidadeCaracteres("Ani8ibal")."<br>";
    echo "A raiz de um numero: ".calcularRAizquadrada(16);

?>