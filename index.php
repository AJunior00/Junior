<?php 
    require "conexao.php";
    echo "<br>Meu sistema está conectado!<br>"; 


    $sql = "CREATE TABLE IF NOT EXISTS teste (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    nome VARCHAR (100) NOT NULL, 
    idade INT NOT NULL
    )";

    $pdo->exec($sql);


    echo "<br>tabela criada com sucesso<br>";
    
    ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="index.css">

    <title>Home</title>
</head>
<body>
    <div class="card">

        <h1>Sobre o Aluno</h1>


    </div>
    
    <br>
    
<div class="lol">

    <a href="idade.php">Verificador de Idade</a>
    <br>
    <br>
    <a href="notas.php">Verificador de Notas</a>
    <br>
    <br>
    <a href="notas-GET.php">Verificador de Notas GET</a>
    <br>
    <br>
    <a href="login-basico.php">Faça seu login aqui</a>
    <br>
    <br>
    <a href="jogos.php">Cadastro de jogos</a>
</div>
</body>
</html>