<?php
$host = "localhost";
$dbname = "agendamento";
$username = "root"; // Alterar conforme seu banco de dados
$password = "root"; // Alterar conforme sua senha

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro ao conectar: " . $e->getMessage();
}
?>