<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Adicione outros estilos aqui -->
</head>
<body>
    
    <?php
// Inclua o arquivo de configuração do banco de dados ou qualquer configuração necessária
include_once 'config.php';

$consultas_sql = "SELECT consultas.id, medicos.nome AS nome_medico, pacientes.nome AS nome_paciente, horario, dia, mes
                  FROM consultas
                  INNER JOIN medicos ON consultas.id_medico = medicos.id
                  INNER JOIN pacientes ON consultas.id_paciente = pacientes.id
                  ORDER BY dia, mes, horario";

$consultas_resultado = $conn->query($consultas_sql);
?>



<?php include_once 'includes/header.php'; ?>

<div class="container mt-4">
    <h1>Consultas Agendadas</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Médico</th>
                <th>Paciente</th>
                <th>Horário</th>
                <th>Data</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($consulta = $consultas_resultado->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $consulta['id']; ?></td>
                    <td><?php echo $consulta['nome_medico']; ?></td>
                    <td><?php echo $consulta['nome_paciente']; ?></td>
                    <td><?php echo $consulta['horario']; ?></td>
                    <td><?php echo $consulta['dia'] . '/' . $consulta['mes']; ?></td>
                    <td>
                        <a href="excluir_consulta.php?id=<?php echo $consulta['id']; ?>" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include_once 'includes/footer.php'; ?>

<script src="js/bootstrap.bundle.min.js"></script>
<!-- Adicione outros scripts aqui -->
</body>
</html>
