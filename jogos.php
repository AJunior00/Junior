<?php 

    require "conexao.php";
    
    $pdo->exec("CREATE TABLE IF NOT EXISTS jogos (
        id  INT PRIMARY KEY e AUTO_INCREMENT,
        nome  VARCHAR(100),
        genero  VARCHAR(50),
        nota  INT,
    ano_lancamento INT
    )");


    $mensagem = "";

    if ($_SERVER["REQUEST-METHOD"])
    ?>