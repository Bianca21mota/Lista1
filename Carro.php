<?php
//CLASSE
class Carro {

    //ATRIBUTOS
    public $cor;
    public $modelo;

    public $marca;
     //METODOS
    public function acelerar ()  {
    echo " Velozes e Furiosos 🌩";
    }
    public function frear () {
    echo "🚓🚓🚓🚨🚨🚨 PARE O CARRO!!!⭐⭐⭐⭐⭐";
    }
}

class CarroEletrico extends Carro {
    public $autonomia;

    public function recarregar() {
        echo "Recarregando... 🔋🔋🔋";
    }
}

?>
