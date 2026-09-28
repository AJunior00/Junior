<?php

$usuario = "";
$senha = 1234;
$resultado = "";
$erro = "";

if($_SERVER["REQUEST_METHOD"]=== "POST"){

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


        <form action="POST">

        <input type="text" name="usuario" id="usuario" placeholder="Digite seu Usuario" required>
        
        <br><br>
        
        <input type="number" name="senha" id="senha" placeholder="Digite sua Senha" required>

        <br><br>

        <button type="submit">Enviar</button>

        </form>

        <br>
        <br>

        <?php if ($_SERVER["REQUEST_METHOD"] === "POST") /*&& isset($_GET["usuario"])) { ?>
*/
?>

            <h2><?=$resultado ?></h2>
            <h2><?=$erro ?> </h2>
            <?php ?>

</body>
</html>

