<?php

$soma = 0;

for($i=1; $i<=100; $i++){

if($i%2===0){

    echo $i . "<br>";
    $soma = $soma + $i; 
}
}

echo "<br>", "A soma é:  $soma";
?>