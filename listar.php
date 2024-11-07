<?php
include 'conexao.php';

$sql = "SELECT * FROM agendamentos ORDER BY data_agendamento ASC";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$agendamentos = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Agendamentos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Agendamentos</h1>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Data e Hora</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($agendamentos as $agendamento): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($agendamento['nome']); ?></td>
                        <td><?php echo htmlspecialchars($agendamento['email']); ?></td>
                        <td><?php echo htmlspecialchars($agendamento['telefone']); ?></td>
                        <td><?php echo date("d/m/Y H:i", strtotime($agendamento['data_agendamento'])); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
