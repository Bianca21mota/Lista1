<?php
$alunos = [
    "Helber"=> [
        "Nota"=> 8
    ],

    "Pedro Emanoel"=> [
        "Nota"=> 9
    ],

    "Manuele"=> [
        "Nota"=> 8
    ]
    ];

    $media = 0;
    
    //criar uma linha horizontal
    echo "<hr>";

    //=> acessa os valores de cada chave 
    foreach ($alunos as $key => $value) {
       echo "Nome: " . $key. "<br>";
       echo "Nota: ". $value['Nota'] . "<br>";

       // divisão individual e depois soma
       $media += $value['Nota']/3;
    }
    echo  "Média da turma: " . number_format($media,2);
?>
