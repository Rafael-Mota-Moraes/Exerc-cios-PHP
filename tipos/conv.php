<div class="titulo">Conversões de tipos</div>
<?php
echo is_int(PHP_INT_MAX);

//INT PARA FLOAT

echo '<br>';
var_dump(PHP_INT_MAX + 1);
echo '<br>';
var_dump(1 + 1.0);
echo '<br>';
var_dump((float) 3);

//Float para int
echo '<p>Float para int</p>';
var_dump((int) 6.8);
echo '<br>';

?>