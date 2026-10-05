<?php
$usuario = "";
$senha = "";
$resultado = "";
$erro = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = $_POST["usuario"] ?? "";
    $senha = $_POST["senha"] ?? "";

    if ($usuario === "junior" && $senha === "1234") {
        $resultado = "Login efetuado com sucesso!";
    } else {
        $erro = "Login incorreto. Tente novamente.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login-baisco.css">
    <title>Login</title>
</head>
<body>
    <main class="login-card">
        <a class="back-link" href="index.php">← Voltar ao início</a>
        <div class="login-heading">
            <span class="eyebrow">ACESSO</span>
            <h1>Boas-vindas</h1>
            <p>Entre com seus dados para continuar.</p>
        </div>

        <form method="POST">
            <label for="usuario">Usuário</label>
            <input type="text" name="usuario" id="usuario" placeholder="Digite seu usuário" autocomplete="username" required>

            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" placeholder="Digite sua senha" autocomplete="current-password" required>

            <button type="submit">Entrar <span aria-hidden="true">→</span></button>
        </form>

        <?php if ($resultado !== ""): ?>
            <p class="message success" role="status"><?= htmlspecialchars($resultado, ENT_QUOTES, "UTF-8") ?></p>
        <?php elseif ($erro !== ""): ?>
            <p class="message error" role="alert"><?= htmlspecialchars($erro, ENT_QUOTES, "UTF-8") ?></p>
        <?php endif; ?>
    </main>
</body>
</html>
