<div class = "titulo">Op. Relacionais</div>

<?php
var_dump(1 == 1);
var_dump(1 > 1);
var_dump(1 >= 1);
var_dump(1 < 1);
var_dump(1 <= 1);
var_dump(1 <> 1);
var_dump(1 != 1);


var_dump(1 == '1');
var_dump(1 === '1');
var_dump(111 != '111');

echo '<p>Relacionais no If/Else</p> <hr>';

$idade = 15;

if($idade < 18) {
    echo "Menor de idade! $idade anos <br>";
} else if($idade < 65) {
    echo "Adulto! $idade anos <br>";
} else {
    echo "Terceira idade! $idade anos <br>";
}

echo "<p>Spaceship</p> <hr>";
var_dump(5 <=> 3);
var_dump(50 <=> 50);
var_dump(50 <=> 51);