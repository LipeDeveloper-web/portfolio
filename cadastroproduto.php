<?php
include("config.php");

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$tipo = $_POST['tipo'];
$quantidade = $_POST['quantidade'];

$sql = "INSERT INTO produtos (nome, descricao, tipo, quantidade) VALUES ('$nome', '$descricao', '$tipo', '$quantidade')";

if (mysqli_query($conexao, $sql)) {
    echo "<p style='color: white; background-color: black; text-align: center;'>Produto registrado com sucesso!</p>";
} else {
    echo "<p style='color: red; background-color: black; text-align: center;'>Erro: " . mysqli_error($conexao) . "</p>";
}

echo "<div style='text-align: center;'><a href='inicial.html' style='color: #0af;'>Página Inicial</a></div>";
?>
