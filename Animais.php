<?php
class Gato {
    public function fazerSom() {
        echo "Miau!";
    }
}
class Cachorro {
    public function fazerSom() {
        echo "Au Au!";
    }
}
//-> acessa um atributo
function emitirSom($animal) {
    return $animal->fazerSom();
}
?>