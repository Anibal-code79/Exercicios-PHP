<?php
$curso = ".         técnico em informática     <br>";
echo $curso;

function mostrarBoasVindas(){
    echo "Bem-vindo ao curso de Programação do Lado do Servidor! <br>";
}
mostrarBoasVindas();

function cumprimentar($nome){
    echo "Olá, ".$nome."! Seja bem-vindo à aula de PHP.";
}
echo "<br>";
cumprimentar("Anibal");
echo "<br>";
cumprimentar("vasco");
echo "<br>";
cumprimentar("Coutinho");
?>