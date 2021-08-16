<div class="titulo">Error Handler</div>

<?php

include 'arquivo_inexistente.php';

function filtrarMensagem($errno, $errstring) {
    $text = 'include';
    return !!stripos(" $errstring", $text);

}

set_error_handler('filtrarMensagem', E_WARNING);

echo '<hr>';
echo 4/0;
include 'arquivo.php';

restore_error_handler();
echo 4/0;
include 'arquivo.php';