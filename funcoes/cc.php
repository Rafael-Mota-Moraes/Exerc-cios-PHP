<div class="titulo">Closure & Callabe</div>

<?php

$soma1 = function($a, $b) {
    return $a + $b;
};

echo $soma1(2, 3) . '<br>';
echo is_callable($soma1) ? "Sim" : "Não";

echo '<br>';

$soma1 = 1;
echo is_callable($soma1) ? "Sim" : "Não";