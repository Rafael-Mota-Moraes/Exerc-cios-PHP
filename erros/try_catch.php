<div class="titulo">Try/Catch</div>

<?php
// echo intdiv(7, 0);

try {
    echo intdiv(7, 0);
} catch(Error $e) {
    echo 'Erro! <br>';
}

try {
    throw new Exception('Algum erro aconteceu!');
    // echo intdiv(7, 0);
} catch (DivisionByZeroError $e) {
    echo 'Divisão por zero! <br>';
} catch (Throwable $e) {
    echo 'Erro encontrado: ' . $e->getMessage() . '<br>';
} finally {
    echo 'Sempre é executado! <br>';
}