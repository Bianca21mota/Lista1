<?php

require "Alunos.php";

$aluno = new Aluno();
$aluno->nome = "João";
$aluno->idade = 18;
$aluno->matricula = "123456";
$aluno->nota1 = 8.0;
$aluno->nota2 = 9.0;
$aluno->peso1 = 3;
$aluno->peso2 = 2;
$aluno->pesototal = $aluno->peso1 + $aluno->peso2;
$aluno->calcularMedia();
$aluno->verificarAprovação();



echo  "<br>". "Nome: " . $aluno->nome . "<br>". "Idade: " . $aluno->idade  . "<br>". "Nota 1º : " .$aluno->nota1 ."<br>"."Peso 1º : " . $aluno->peso1 . "<br>". "Nota 2º : " .$aluno->nota2 . "<br>"."Peso 2º : " . $aluno->peso2 ."<br>". "Matrícula: " . $aluno->matricula  ."<br>" ."Media Ponderada: " . $aluno->calcularMedia() . "<br>" 

?>