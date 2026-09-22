<?php

    $nota1 = "";
    $nota2 = "";
    $nota3 = "";
    $nota4 = "";
    $nota5 = "";
    $nome = "";
    $idade = "";
    $media = "";
    $resultado = "";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $nota1 = (float) $_POST["nota1"];
    $nota2 = (float) $_POST["nota2"];
    $nota3 = (float) $_POST["nota3"];
    $nota4 = (float) $_POST["nota4"];
    $nota5 = (float) $_POST["nota5"];



        $media = ($nota1 * 2 + $nota2 * 3 + $nota3 * 1 + $nota4 * 1 + $nota5 * 3) / 10;
        
        if ($media >= 7.0) {
            $resultado = "APROVADO";
        } elseif ($media >= 5.0){
            $resultado = "RECUPERAÇÃO";
        } else {
            $resultado = "REPROVADO";
        }
    }
        ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas!</title>
            <link rel="stylesheet" href="notas.css">

</head>
<body>
        <h1>Cadastro do aluno</h1>

    <form method="POST">
        <input type="text" name="nome" placeholder="Digite seu nome" required>
        
        <br><br>
        
        <input type="number" name="idade" placeholder="Digite sua idade" required>
        
        <br><br>
        
        <input type="number" name="nota1" placeholder="Nota 1" step="0.1" required>
        
        <br><br>
        
        <input type="number" name="nota2" placeholder="Nota 2" step="0.1" required>
        
        <br><br>
        
        <input type="number" name="nota3" placeholder="Nota 3" step="0.1" required>
        
        <br><br>
        
        <input type="number" name="nota4" placeholder="Nota 4" step="0.1" required>
        
        <br><br>
        
        <input type="number" name="nota5" placeholder="Nota 5" step="0.1" required>
        
        <br><br>
        
        <button type="submit">Enviar</button>
    </form>

    <br>
    
    <?php if ($_SERVER["REQUEST_METHOD"] === "POST") { ?>
        <div class="card">
            <h1>Resultado</h1>
            <p>Nome: <?= htmlspecialchars($nome) ?></p>
            <p>Idade: <?= htmlspecialchars($idade) ?> anos</p>
            <p>Média Final: <?= number_format($media, 1, ",", ".") ?></p>
            <h2><?= $resultado ?></h2>
        </div>
    <?php } ?>

</body>
</html>
