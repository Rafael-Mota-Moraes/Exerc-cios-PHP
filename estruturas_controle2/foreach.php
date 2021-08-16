<div class="titulo">ForEach</div>

<?php
$array = 
[1 => 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado', 'Domingo'];

foreach($array as $valor) {
    echo "$valor <br>";
}

foreach($array as $indice => $valor) {
    echo "$indice => $valor <br>";
}