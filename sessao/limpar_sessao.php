<?php
session_start();
session_destroy();

header('Location: alterar_sessao.php');