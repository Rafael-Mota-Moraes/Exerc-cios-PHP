<div class="titulo">Argumentos & Retorno</div>

<?php

function obterMensagem() {
    return 'Seja bem vindo!';
}

echo obterMensagem();

$m = obterMensagem();

echo $m;
echo '<br>', obterMensagem();
echo '<br>';
var_dump(obterMensagem());


function obterMensagemComNome($nome) {
    return "Bem vindo, {$nome}";
}

echo '<br>'.obterMensagemComNome("Vagner");
echo '<br>'.obterMensagemComNome("Thiago");

function soma($a, $b){
    return $a + $b;
}

$x = 4;
$y = 5;

echo '<br>' . soma($x, $y);
echo '<br>' . soma(45, 78);

function trocaValor($a, $novoValor) {
    $a = $novoValor;
}

$variavel = 1;

trocaValor($variavel, 3);

echo '<br>' . $variavel;

function trocarValorDeVerdade(&$a, $novoValor) {

    $a = $novoValor;

}

echo '<br>' . $variavel;
trocarValorDeVerdade($variavel, 5);
echo '<br>' . $variavel;