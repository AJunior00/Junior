<?php

    $nota1 = 0;
    $nota2 = 0;
    $nota3 = 0;
    $nota4 = 0;
    $nota5 = 0;
    $nome = "";
    $idade = 0;
    $media = 0;
    $resultado = 0;
    $cor = "black";
    $frequencia = 0;

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $nota1 = (float) $_POST["nota1"];
    $nota2 = (float) $_POST["nota2"];
    $nota3 = (float) $_POST["nota3"];
    $nota4 = (float) $_POST["nota4"];
    $nota5 = (float) $_POST["nota5"];



        $media = ($nota1 * 2 + $nota2 * 3 + $nota3 * 1 + $nota4 * 1 + $nota5 * 3) / 10;
        
        if ($media >= 10) {
            $resultado = "APROVADO COM EXCELÊNCIA.";
            $cor = "blue";
        } elseif ($media >= 7) {
            $resultado = "APROVADO.";
            $cor = "green";
        } elseif ($media >= 5) {
            $resultado = "RECUPERAÇÃO.";
            $cor = "orange";
        } else {
            $resultado = "REPROVADO.";
            $cor = "red";
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
        <h1>Leitor de notas</h1>

    <form method="POST">
        <input type="text" name="nome" placeholder="Digite seu nome" required>
        
        <br><br>
        
        <input type="number" name="idade" placeholder="Digite sua idade" required>

        <br><br>

        <input type="number" name="frequencia" placeholder="Digite a sua frequencia" required>
        
        <br><br>
        
        <input type="number" name="nota1" placeholder="Digite a primeira Nota" step="0.1" required>
        
        <br><br>
        
        <input type="number" name="nota2" placeholder="Digite a segunda Nota" step="0.1" required>
        
        <br><br>
        
        <input type="number" name="nota3" placeholder="Digite a terceira Nota" step="0.1" required>
        
        <br><br>
        
        <input type="number" name="nota4" placeholder="Digite a quarta Nota" step="0.1" required>
        
        <br><br>
        
        <input type="number" name="nota5" placeholder="Digite a quinta Nota" step="0.1" required>
        
        <br><br>
        
        <button type="submit">Enviar</button>
    </form>

    <br>
    
    <?php if ($_SERVER["REQUEST_METHOD"] === "POST") { ?>
        <div class="card">
            <h1>Resultado</h1>
            <p>Nome: <?= $nome ?> </p>
            <p>Idade: <?= $idade ?> anos </p>
            <p>Frequencia: <?= $frequencia  ?> % </p>
            <p>Média Final: <?= number_format($media, 1, ",", ".") ?> </p>
            <h2><span class="<?= $cor ?>"><?= $resultado ?> </span></h2>
        </div>
    <?php } ?>

</body>
</html>
