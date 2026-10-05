<?php

    $nota1 = 0;
    $nota2 = 0;
    $nota3 = 0;
    $nota4 = 0;
    $nota5 = 0;
    $nome = "";
    $idade = 0;
    $media = 0;
    $resultado = "";
    $cor = "black";
    $frequencia = 0;

    if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["nome"])) {

        $nome = $_GET["nome"];
        $idade = $_GET["idade"];
        $frequencia = $_GET["frequencia"];

        $nota1 = (float) $_GET["nota1"];
        $nota2 = (float) $_GET["nota2"];
        $nota3 = (float) $_GET["nota3"];
        $nota4 = (float) $_GET["nota4"];
        $nota5 = (float) $_GET["nota5"];

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
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Notas!</title>

    <link rel="stylesheet" href="notas-GET.css">
</head>

<body>
    <div class="cor">

    <p><a href="index.php">Voltar ao início</a></p>
<br><br><br>

    <h1>Leitor de notas</h1>

    <form method="GET">

        <input type="text" name="nome" placeholder="Digite seu nome" required>

        <br><br>

        <input type="number" name="idade" placeholder="Digite sua idade" required>

        <br><br>

        <input type="number" name="frequencia" placeholder="Digite a sua frequência" required>

        <br><br>

        <input type="number" name="nota1" placeholder="Digite a primeira nota" step="0.1" required>

        <br><br>

        <input type="number" name="nota2" placeholder="Digite a segunda nota" step="0.1" required>

        <br><br>

        <input type="number" name="nota3" placeholder="Digite a terceira nota" step="0.1" required>

        <br><br>

        <input type="number" name="nota4" placeholder="Digite a quarta nota" step="0.1" required>

        <br><br>

        <input type="number" name="nota5" placeholder="Digite a quinta nota" step="0.1" required>

        <br><br>

        <button type="submit">Enviar</button>

        <br><br>
    </form>



    </div>
    <br>

    <?php if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["nome"])) { ?>

        <div class="card">

            <h1>Resultado</h1>

            <p>Nome: <?= $nome ?></p>

            <p>Idade: <?= $idade ?> anos</p>

            <p>Frequência: <?= $frequencia ?>%</p>

            <p>Média Final: <?= number_format($media, 1, ",", ".") ?></p>

            <h2>
                <span class="<?= $cor ?>">
                    <?= $resultado ?>
                </span>
            </h2>

        </div>

    <?php } ?>

</body>
</html>


