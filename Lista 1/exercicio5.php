<?php
$pontuacaoinitial = 100;

echo 'A Pontuação Inicial é: ' . $pontuacaoinitial . '<br>';


$rodada1 = - 15;
$rodada2 = 20;
$rodada3 = - 15;
$pontuacaoinitial = $pontuacaoinitial + $rodada1;
$pontuacaoinitial = $pontuacaoinitial + $rodada2; 
$pontuacaoinitial = $pontuacaoinitial + $rodada3;

echo 'A Pontuação Final é: ' . $pontuacaoinitial  . '<br>';


