<?php

/**
 * Função de validação de email 
 * @param string $email Endereço de email a ser validado
 * @return bool resultado booleano de validação
 */
function validarEnderecoEmail (string $email): bool 
{
  return filter_var ( $email, FILTER_VALIDATE_EMAIL);

}
$diaDaSemana = 1;
//== switch so compara o valor
switch ($diaDaSemana) {
    case 1:
        echo "Domingo";
        break;
    case 2: 
        echo "Segunda-Feira";
        break;
    case 3:
         echo "Terça-Feira";
        break;
    case 4:
         echo "Quarta-Feira";
        break;
    case 5:
         echo "Quinta-Feira";
        break;    
    case 6:
         echo "Sexta-Feira";
        break;
    case 7:
         echo "Sábado";
        break;
    default:
    echo "O número informado não equivale a um dia de semana válido!";

}

//=== compara o valor e o tipo
$resultado= match($diaDaSemana){
    1=> "Domingo",
    2=> "Segunda-Feira",
    3=>"Terça-Feira",
    4=>"Quarta-Feira",
    5=> "Quinta-Feira",
    6=> "Sexta-Feira",
    7=> "Sábado",
    default => "O número informado não equivale a um dia de semana válido!"

};

//echo "$resultado";
// var dump mostra o tipo e a quantidade de caracteres/casos (7por ser 7 dias da semana) e debuga o codigo
echo "<br>";
var_dump($resultado);
?>