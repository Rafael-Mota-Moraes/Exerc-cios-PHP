<div class="titulo">$_POST</div>

<form action="#" method="POST">
    <input type="text" name="nome">
    <input type="text" name="sobrenome">
    <button>Enviar</button>
</form>

<style>
    form > * {font-size: 1.8rem;}
</style>

<?php

print_r($_POST);
