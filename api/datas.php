<div class="titulo">Datas</div>

<?php

echo time() . '<br>';
setlocale(LC_TIME, 'Brazil' , 'ptb.utf-8');
echo date('D, d \d\e m \d\e Y - H:i A') . '<br>';

echo strftime('%A, %d de %B de %Y', time()) . '<br>';

$amanha = time() + (24 * 60 * 60);

echo strftime('%A, %d de %B de %Y', $amanha) . '<br>';
$proximaSemana = strtotime('+1 week');

echo strftime('%A, %d %B de %Y', $proximaSemana) . '<br>';

$dataFixa = mktime(15, 30, 50, 1, 25, 1975);

echo strftime('%A, %d de %B de %Y - %H:%M:%S', $dataFixa);

?>