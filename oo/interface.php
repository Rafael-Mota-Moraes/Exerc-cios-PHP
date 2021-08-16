<div class="titulo">Interface</div>

<?php

interface Animal {
    function respirar();
}

interface Canino {
    function latir(): string;
}

class Cachorro implements Animal, Canino {
    function respirar(){
        return "Irei usar oxigênio! <br>";
    }

    function latir(): string {
        return 'Au au';
    }

}

$animal1 = new Cachorro();
echo $animal1->respirar();
echo $animal1->latir();
echo '<br> Fim';
