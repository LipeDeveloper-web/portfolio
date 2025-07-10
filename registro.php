<?php
    include("config.php");

    $usuario = $_POST['usuario'];
    $senha = password_hash($_POST['senha']PASSWORD_BCRYPT);
    $nome = $_POST['nome'];
    $nascimento = $_POST['nascimento'];
    $cpf = $_POST['cpf'];
    $sexo = $_POST['sexo'];
    $cargo = $_POST['cargo'];
    $data_cadastro = $_POST['data_cadastro'];

    $sql = "INSERT INTO usuarios (usuario, senha, nome, nascimento, cpf, sexo, cargo, data_cadastro	) VALUES ('$usuario', '$senha', '$nome', '$nascimento', '$cpf', '$sexo', '$cargo', '$data_cadastro',)";

    if (mysqli_query($conexao, $sql)) {
        alert ("Usuario registrado com sucesso!");
    } else {
        echo "Erro: " . mysqli_error($conexao);
    }
    echo "<a href='inicial.html'>Página Inicial</a>";
?>