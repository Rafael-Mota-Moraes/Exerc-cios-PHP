<div class="titulo">Breack/Continue</div>

<?php
$cont = 17;

for(;;) {
    echo "$cont <br>";
    $cont++;
    if($cont > 20) {
        break;
    }
}
echo '<hr>';

for(;;) {
    $cont++;
    if($cont % 2 === 1) {
        continue;
    }
    
    echo "$cont <br>";
    
    if($cont >= 30) {
        break;
    }
    
}

echo '<hr>';


echo "Fim!";

