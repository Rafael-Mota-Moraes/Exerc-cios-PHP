<div class="titulo">Função e escopo</div>

<?php
function imprimirMensagem() {
    echo "Olá! ";
    echo "Até a próxima! <br>";
};

imprimirMensagem();
imprimirMensagem();
imprimirMensagem();

$variavel = 1;

function trocaValor() {
    $variavel = 2;
    echo "Durante a função: $variavel <br>";
}


echo "Antes: $variavel <br>";
trocaValor();
echo "Depois: $variavel <br>";

function trocarValorDeVerdade() {
    global $variavel;
    $variavel = 3;
    echo "Durante a função: $variavel <br>";
}


echo "Antes: $variavel <br>";
trocarValorDeVerdade();
echo "Depois: $variavel <br>";

var_dump(trocarValorDeVerdade());