<div class="titulo">PDO: Consulta</div>

<?php
require_once 'conexao_pdo.php';

$conexao = novaConexao();
$sql = "SELECT * FROM cadastro";
//PDO::FETCH_NUM
$resultado = $conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);

print_r($resultado);
echo '<hr>';

$sql = 'SELECT * FROM cadastro LIMIT :qtde OFFSET :inicio';
$stmt = $conexao->prepare($sql);
$stmt->bindValue(':qtde', 2, PDO::PARAM_INT);
$stmt->bindValue(':inicio', 3, PDO::PARAM_INT);

if($stmt->execute()) {
    $resultado = $stmt->fetchAll();
    print_r($resultado);
} else {
    echo "Código: " . $stmt->errorCode() . '<br>';
    print_r($stmt->errorInfo());
}

echo '<hr>';

$sql = "SELECT * FROM cadastro WHERE id = ?";
$stmt = $conexao->prepare($sql);
if($stmt->execute([1])) {
    $resultado = $stmt->fetchAll();
    print_r($resultado);
} else {
    echo "Código: " . $stmt->errorCode() . '<br>';
    print_r($stmt->errorInfo());
}
// $conexao->close();
