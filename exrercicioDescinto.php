<?php
 
function aplicarTaxa(&$valor) { 
$valor = $valor + ($valor * 0.10); 
} 
$preco = 100; 
aplicarTaxa($preco); 
echo "Preço final: ". $preco; 
?> 
