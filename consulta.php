<?php
include("config.php");

// Consulta as vendas feitas por usuários com cargo = 'vendedor'
$sql = "SELECT venda.dataregis, venda.hora, usuarios.nome 
        FROM venda 
        JOIN usuarios ON venda.idusuario = usuarios.idusuario 
        WHERE usuarios.cargo = 'vendedor'";

$resultado = mysqli_query($conexao, $sql);

echo "<h1 style='color: white; background-color: black;'>Registros de Vendas</h1>";

if (mysqli_num_rows($resultado) > 0) {
    while ($registro = mysqli_fetch_assoc($resultado)) {
        echo "<p style='color: white; background-color: black;'>
              Nome: " . $registro['nome'] . 
              " | Data: " . $registro['dataregis'] . 
              " | Hora: " . $registro['hora'] . "</p>";
    }
} else {
    echo "<p style='color: red;'>Nenhum registro encontrado.</p>";
}
?>
