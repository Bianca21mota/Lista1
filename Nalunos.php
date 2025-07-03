<?php

require "Alunos.php";

$aluno = new Alunos();
$aluno->nome = "João";
$aluno->idade = 18;
$aluno->matricula = "123456";
$aluno->nota1 = 8.0;
$aluno->nota2 = 9.0;
$aluno->peso1 = 3;
$aluno->peso2 = 2;
$aluno->pesototal = $aluno->peso1 + $aluno->peso2;
$aluno->notatotal= $mediaPonderada = $aluno->calcularMedia();
$aluno->verificarAprovação();
echo "Nome: " . $aluno->nome . "<br>". "Idade: " . $aluno->idade . "<br>". "Matrícula: " . $aluno->matricula . "<br>". "Nota Total: " . $aluno->notatotal . "<br>";

?>