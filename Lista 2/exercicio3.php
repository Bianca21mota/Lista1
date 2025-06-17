<?php
$Produtos = [
    "Chocolate"=> "R$10,00",
    "Suco"=> "R$5,00",
    "Bolo"=> "R$15,00"
    ];
foreach ($Produtos as $key => $value) {
echo "Produto: ".$key. ", " ."Preço: " .$value."<br>";

}
?>