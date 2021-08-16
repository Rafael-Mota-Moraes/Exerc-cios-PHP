<div class="titulo">Função anonima</div>

<?php

$soma = function($a, $b) {
    return $a + $b;
};

echo $soma(1, 2) . '<br>';

function executar($a, $b, $op, $funcao){
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado";
}

executar(2, 3, '+', $soma);


$multiplicacao = function($a, $b) {
    return $a * $b;
};

echo '<br>';

executar(2, 3, '*', $multiplicacao);