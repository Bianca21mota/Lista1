<?php
$usuario = [
    "Nome" => "Ivy",
    "Idade" =>  17,
    "Email" => "ivy@example.com"

];

echo 'Os dados são:' ."<br>";
foreach ($usuario as $key => $value) {
echo $key. ":" .$value ."<br>" ;
}

?>