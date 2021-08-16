<div class="titulo">PDO: Inserir</div>

<?php

require_once 'conexao_pdo.php';

$sql = "INSERT INTO cadastro
    (nome, email, nascimento, site, filhos, salario)
VALUES
    (    
    'Gulherme filho',
    'gui@bol.com.br',
    '1998-7-21',
    'http://gui.com.br',
    3,
    12000.09
    )";


$conexao = novaConexao();
if($conexao->exec($sql)) {
    $id = $conexao->lastInsertId();
    echo "Novo usuario com id: $id";
} else {
    echo $conexao->errorCode();
    print_r($conexao->errorInfo());
}
