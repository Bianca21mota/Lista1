<?php

class Alunos{
    public $nome;
    public $idade;
    public $matricula;
    public $nota1;
    public $nota2;
    public $peso1;
    public $peso2;
    public $pesototal;

    public $notatotal;

    //public function exibirDados(){}

    // this é essencial para referenciar os atributos dentro da própria classe. 
    function calcularMedia(){
        $mediaPonderada = ($this->nota1 * $this->peso1 + $this->nota2 * $this->peso2) / $this->pesototal;
        return $mediaPonderada;

}

public function verificarAprovação(){
    if($this->calcularMedia() >= 7){
        echo "Aprovado";
    }else{
        echo "Reprovado";
    }
}

   
}
?>