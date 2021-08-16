<div class="titulo">Final</div>

<?php

abstract class Abstrata {
    abstract public function metodo1();

    final public function metodo2() {
        echo "Não vou mudar! <br>";
    }

}

class Classe extends Abstrata {
    public function metodo1(){
        echo 'Executando metodo 1. <br>';
    }

    // public function metodo2() {
    //     echo 'Extendendo metodo 2 <br>';
    // }

}
$arg = '';
$classe = new Classe($arg);
$classe->metodo1();
$classe->metodo2();

final class Unica {
    public $att = 'Valor';
}

$unica = new Unica();
echo $unica->att;


// class Duplicata extends Unica {
//     public $att;
// }