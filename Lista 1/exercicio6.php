<?php
$notaa = 6;
$notab = 5;
$notac = 8;
$med = ($notaa+$notab+$notac)/3;



if($med===7 or $med>7){
    echo 'Aprovado, a média final é: ' .$med;

}

else{
    echo 'Reprovado, a média final é: ' .$med;
}
?>