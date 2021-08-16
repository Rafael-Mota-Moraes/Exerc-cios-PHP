<div class="titulo">Inserir Registro #1</div>

<?php
require_once 'conexao.php';

$sql = "INSERT INTO cadastro 
    (nome, nascimento, email, site, filhos, salario)
    VALUES (
        'Julio', 
        '1986-11-30',
        'Julio@email.com.br',
        'https://Julio.sites.com.br',
        22,
        18000.99
    )";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado) {
    echo 'Sucesso.';
} else {
    echo 'Erro: ' . $conexao->error;
}

$conexao->close();