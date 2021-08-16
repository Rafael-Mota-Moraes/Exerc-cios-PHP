<div class="titulo">Niveis de Visibilidade</div>

<?php

class A {
    public $publico = 'Público';
    protected $protegido = 'Protegio';
    private $privado = 'Privado';

    public function mostrarA() {
        echo "Class A) Público = {$this->publico} <br>";
        echo "Class A) Protegido = {$this->protegido} <br>";
        echo "Class A) Privado = {$this->privado} <br>";
    }

    protected function vaiPorHeranca() {
        echo "Serei impresso por Herança! <br>";
    }
    private function naoMostrar() {
        echo "Não vou imprimir";
    }
}

$a = new A();
$a->mostrarA();

// $a->naoMostrar();

echo '<hr>';

class B extends A {
    public function mostrarB() {
        echo "Class B) Publico = {$this->publico} <br>";
        echo "Class B) Protegido = {$this->protegido} <br>";
        // echo "Class B) Privado = {$this->privado} <br>";
        parent::vaiPorHeranca();
    }


}

$b = new B();
$b->mostrarB();
$b->mostrarA();
// $b->vaiPorHeranca();