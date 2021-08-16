<div class="titulo">Op. Lógicos</div>

<?php
echo '<p>V ou F</p> <hr>';
var_dump(true);
echo '<br>';
var_dump(!true);

echo "<p>Tabela verdade 'And' (E)</p> <hr>";
var_dump(true && true);
var_dump(true && false);
var_dump(false && false);
// var_dump(true && 3 > 2 && 7 <= 7 && 3 == '3');

echo "<p>Tabela verdade 'Or' (OU)</p> <hr>";
var_dump(false || false);
var_dump(false || true);
var_dump(true || true);

echo "<p>Tabela verdade 'Xor' (OU Exclusivo)</p> <hr>";
var_dump(true xor true);
var_dump(true xor false);

echo '<p>Exemplo</p> <hr>';

$idade = 62;
$sexo = 'F';
echo '<br>';

$podeSeAposentar = ($idade >= 60 && $sexo === 'F') || ($idade >= 65 && $sexo === "M");
if($podeSeAposentar) {
    echo "Pode se aposentar: Sexo: $sexo, Idade: $idade";
}  else {
    echo "Não pode se aposentar: Sexo: $sexo, Idade: $idade";
}

