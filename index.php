<?php 
    require "conexao.php";
    echo "<br>Meu sistema está conectado!<br>"; 


    $sql = "CREATE TABLE IF NOT EXISTS teste (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    nome VARCHAR (100) NOT NULL, 
    idade INT NOT NULL
    )";

    $pdo->exec($sql);


    echo "<br>tabela criada com sucesso<br>";
    
    ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="index.css">

    <title>Home</title>
</head>
<body>
    <div class="lol">

    <div class="card">    
        <br>
        
        <h1>Bem-vindo!</h1>
        <p>Escolha uma pagina:</p>
    </div>
    
    <a href="login-basico.php">Faça seu login aqui</a>
    <br>
    <br>
    <a href="idade.php">Verificador de Idade</a>
    <br>
    <br>
    <a href="notas.php">Verificador de Notas</a>
    <br>
    <br>
    <a href="notas-GET.php">Verificador de Notas GET</a>
    <br>
    <br>
    <a href="jogos.php">Cadastro de jogos</a>
    
    <header>
    
        <nav>

        <h2 class="logo">Meu Portifólio</h2>
    
        <ul class="manu">

            <li> <a href="#inicio">Inicio</a></li>
            <li> <a href="#sobre">Sobre</a></li>
            <li> <a href="#habilidades">Habilidades</a></li>
            <li> <a href="#projetos">Projetos</a></li>
            <li> <a href="#contato">Contato</a></li> 
        </ul>

    </nav>
</header>
    <main>
        <section id="inicio" class="inicio">
            <div class="inicio-conteudo">
                <p class="saudacao"> Olá! Eu sou</p>
                <h1>Junior</h1>
                <h2>Desenvolvedor em Formação</h2>
                <p>
                    Como estudante de Desenvolvimento de Sistemas, 
                    busco aprimorar minhas competências e me especializar
                    em áreas estratégicas do mercado de tecnologia.
                </p>
            </div>
        </section>
        <section id="habilidades" class="secao secao-destaque">
            <h2 class="titulo-secao">Minhas habilidades</h2>
            <p class="subtitulo-secao">
                algumas tecnologias que estou estudando:
            </p>
            <div class="lista-habilidades">
                <div class="habilidades">
                    HTML

                </div>
                <div class="habilidades">
                    CSS

                </div>
                <div class="habilidades">
                    PHP

                </div>

            </div>

        </section>
        <section id="projetos" class="secao">

        </section>
    </main>
</div>
</body>
</html>