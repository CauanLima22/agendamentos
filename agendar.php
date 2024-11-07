<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $data_agendamento = $_POST['data_agendamento'];

    // Preparar a consulta SQL
    $sql = "INSERT INTO agendamentos (nome, email, telefone, data_agendamento) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);

    // Executar a consulta
    try {
        $stmt->execute([$nome, $email, $telefone, $data_agendamento]);
        echo "Agendamento realizado com sucesso!";
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
}
?>
