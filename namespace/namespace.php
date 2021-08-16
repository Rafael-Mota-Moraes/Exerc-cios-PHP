<?php namespace contexto; ?>

<div class="titulo">Namespace</div>

<?php

echo __NAMESPACE__ . '<br>';
const constante1 = 123;
define('contexto\constante2', 234);
define(__NAMESPACE__ . '\constante3', 345);

define('outro_contexto\constante4', 456);

echo constante1 . '<br>';
echo constante2 . '<br>';
echo \contexto\constante3 . '<br>';