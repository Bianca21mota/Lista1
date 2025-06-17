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

echo "<br>";

// 1 Forma de criar Array
$arr = array(1,2,3,4,5);

// 2 Forma de criar Array
$arr2 = [1,2,3,4,5];

// Encontrando um elemento pela sua posição dentro de um ARRAY
echo $arr[0] . " " . $arr[1];
 
echo "<br>";

foreach($arr2 as $number) {
     echo "Numero: ".$number."<br>";

}




?>

