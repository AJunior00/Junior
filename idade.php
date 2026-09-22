<?php

$nome = "";

$idade = 0;

$mostrar = "";

if ($_SERVER ["REQUEST_METHOD"] == "POST"){
    
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    
    if ($idade >=18){
        $mostrar = " De Maior";
    }
    else {
        $mostrar = "De Menor";
    }
}
?>

<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="idade.css">
    
    <title>bla bla sla</title>
</head>
<body>


    <form method="POST">
        
        <input type="text" id="nome" name="nome" placeholder="Digite seu Nome">
        <br>
        <br>
        
        <input type="number" id="idade"  name="idade" placeholder="Digite sua idade">
        <br>
        <br>

            <input type="submit" value="Enviar">
    </form>

    <div class="cardIdade">

        
        <h1>Mostrando Nome e Idade</h1>
        <br>
        
        <p>O meu nome é <?=  $nome?> </p>
        <p>Minha idade é <?=  $idade?> </p>

    </div>
        
    </body>
    </html>
    
    