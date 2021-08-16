<?php

session_start();
print_r($_SESSION);
?>

<p>
    <b>Nome: <?= $_SESSION['nome'] ?> </b> <br>
    <b>Email: <?= $_SESSION['email'] ?> </b>
</p>

<?php
    $_SESSION['email'] = 'rafaalterado@bol.com';
?>  

<p>
    <a href="sessao.php">Voltar</a>
</p>
<p>
    <a href="limpar_sessao.php">Limpar sessão</a>
</p>