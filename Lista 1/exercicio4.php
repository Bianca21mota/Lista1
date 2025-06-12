<?php
$produtopreco = 20;
$percentdesconto = 0.5;
$valordodesconto = $produtopreco*$percentdesconto; 
$valorfinal = $produtopreco-$valordodesconto;
echo "O Valor original é: $produtopreco", "<br>", "O Valor do desconto é: $valordodesconto","<br>","O Valor após o desconto é: $valorfinal";
?>