<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);

    if (!empty($nome) && !empty($email)) {
       // preencher a coluna data_criacao
        $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, data_criacao) VALUES (:nome, :email, NOW())");
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);

        if ($stmt->execute()) {
            // Redirecionar para a lista- depois de salvar
            header("Location: listar.php");
            exit;
        }
    }
}

echo "Erro ao cadastrar. Verifique se os campos foram preenchidos corretamente.";
?>