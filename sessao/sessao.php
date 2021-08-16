<div class="titulo">Sessão</div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<?php
session_start();

print_r($_SESSION);
echo '<br>';

if(!$_SESSION['nome']) {
    $_SESSION['nome'] = 'Rafael';
}

if(!$_SESSION['email']) {
    $_SESSION['email'] = 'rafael@mail.com';
}

print_r($_SESSION);

?>

<p>
    <a class='btn btn-success p-2' href="/sessao/alterar_sessao.php">Alterar Sessão</a>
</p>