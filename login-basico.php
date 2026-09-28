<?php

$usuario = "";
$senha = 1234;
$resultado = "";
$erro = "";

if($_SERVER["rEQUEST_METHOD"]=== "POST"){

    $usuario = $_GET["usuario"];
    $senha = $_GET["senha"];

    if($usuario == "junior" && $senha== "1234" ) {
    $resultado = "Login efetuado com Sucesso";
    }
    else {
        $erro = "Login incorreto, tente novamente";
    }

}







?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <h1>Faça seu login</h1>


        <form action="GET">

        <input type="text" id="usuario" placeholder="Digite seu Usuario" required>
        
        <br><br>
        
        <input type="number" id="senha" placeholder="Digite sua Senha" required>

        <br><br>

        <button type="submit">Enviar</button>

        </form>

        <br>
        <br>

        <?php  if ($_SERVER["REQUEST_METHOD"] === "GET") { ?>


            <h2><?=$resultado ?></h2>
            <h2><?=$erro ?> </h2>
            <?php } ?>

</body>
</html>

