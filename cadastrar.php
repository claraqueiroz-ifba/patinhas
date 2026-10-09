<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Cadastrar Usuário</h2>
    <form action="cadastrar_confirmar.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <button type="submit">Salvar</button>
    </form>
    <br>
    <a href="index.php">Voltar</a>
</body>
</html>