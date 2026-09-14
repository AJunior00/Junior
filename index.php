<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bla bla sla</title>
</head>
<body>

    <?php
    $nome = "Mr_junior";
    $idade = "17";
    $mostar = ""
    if ($idade >=18){
        $mostrar = "Você é maior de idade"
    };
    else ($idade <=18){
        $mostrar = "Você é menor de idade!"
    };
    ?>
    <h1>nome: <?= $nome ?> </h1>
    <h2>idade: <?= $idade ?></h2>
    <p>mostrar: <?= $mostrar ?></p>
</body>
</html>