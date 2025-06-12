<?php
//Irmão do console.log ()
echo"<h1>Hello World</h1>";
echo"<hr>";
$nome = "Ana";
$idade = 23;
echo $nome;
echo "<br>";
if ($nome === "Ana" and $idade === 23){
    echo 'Seja bem vindo(a) ' . $nome . "<br>";
}

function saudacao($nome) {
return 'Olá, ' . $nome . "<br>";
}
//legenda do que a função esta esperando "nome:"
echo saudacao($nome) . "<br>";

//debugando variáveis
var_dump($nome, $idade);

?>