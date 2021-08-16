<div class="titulo">Comparação arrays</div>

<?php

$arr1 = ['nome' => 'Maria', 'idade' => 20];
$arr2 = ['nome' => 'Maria', 'idade' => 20];

var_dump($arr1 == $arr2);
var_dump($arr1 === $arr2);

$arr2 = ['idade' => 20, 'nome' => 'Maria'];
echo '<br>';
var_dump($arr1 == $arr3);
var_dump($arr1 === $arr3);
