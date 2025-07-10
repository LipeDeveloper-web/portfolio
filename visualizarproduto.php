<?php
include("config.php")

$sql = "SELECT nome, descricao, tipo, quantidade FROM produtos";
$resultado = mysqli_query($conexao, $sql);

// Verifica se há registros
echo "<h1>Registros de Produtos</h1>";
if (mysqli_num_rows($resultado) > 0) {
    while ($registro = mysqli_fetch_array($resultado)) {
        echo "Nome:" . $registro['nome'] . " <br>Descrição: " . $registro['descricao'] . " <br>Tipo:" . $registro['tipo']. "<br>";       
    }
} else {
    echo "Nenhum registro encontrado.";
}

// Fecha a conexão
mysqli_close($conexao);
?>