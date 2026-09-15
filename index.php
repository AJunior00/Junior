

<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>bla bla sla</title>
</head>
<body>


<form action="">

    <input type="text" name="$nome" placeholder="Digite seu Nome">

    <input type="number" id="$idade" placeholder="Digite sua idade">
    </form>

    
    <?php
    $nome = "Mr_junior";
    $idade = "17";
    $mostar = "";
    if ($idade >=18){
        $mostrar = "Você é maior de idade";
    }
    else {
        $mostrar = "Você é menor de idade!";
    }
    ?>
    <div class="card">

        <h1>nome: <?= $nome?> </h1>
        <h2>idade: <?= $idade?></h2>
        <p>mostrar: <?= $mostrar?></p>
    </div>
</body>
</html>