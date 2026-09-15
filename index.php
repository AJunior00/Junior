<div class="card">
<h1>nome: <?= $nome?> </h1>
        <h2>idade: <?= $idade?></h2>
        <p>mostrar: <?= $mostrar?></p>

</div>

<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>bla bla sla</title>
</head>
<body>


<form method="POST">

    <input type="text" id="nome" name="nome">

    <input type="text" name="$nome" placeholder="Digite seu Nome">

    <input type="number" id="$idade" placeholder="Digite sua idade">

    <input type="submit" value="Enviar">
    </form>

    <div class="card">

        
        <h1>Mostrando idade</h1>
        
        <?php

$nome = "";

$idade = 0;

$mostar = "";

if ($_SERVER ["REQUEST_METHOD"] == "POST"){
    
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    
    if ($idade >=18){
        $mostrar = "Você é maior de idade";
    }
    else {
        $mostrar = "Você é menor de idade!";
    }
}
?>
    
    <?php if ($mostrar != "") { ?>
        
        <h2>
            o <?= $nome ?> é <?= $mostrar ?> de idade. 
        </h2>
        
        <?php } ?>
    
    </div>
        
    </body>
    </html>
    
    