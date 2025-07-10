<?php
$conexao = mysqli_connect("localhost", "root", "", "bongaspdv");
if (!$conexao) {
    die("Erro na conexão: " . mysqli_connect_error());
}
?>