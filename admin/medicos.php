<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Médicos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Adicione outros estilos aqui -->
</head>

<body>
    
    <?php include_once 'config.php'; 
// Inclua o arquivo de configuração do banco de dados ou qualquer configuração necessária
?>

<?php
include_once 'config.php';

$medicos_sql = "SELECT medicos.id, medicos.nome, especialidades.nome AS nome_especialidade, medicos.crm, medicos.telefone
                FROM medicos
                INNER JOIN especialidades ON medicos.id_especialidade = especialidades.id
                ORDER BY nome";

$medicos_resultado = $conn->query($medicos_sql);
?>



<?php include_once 'includes/header.php'; ?>

<div class="container mt-4">
    <h1>Gerenciamento de Médicos</h1>
    
    <a href="adicionar_medico.php" class="btn btn-primary">Adicionar Médico</a>
    
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Especialidade</th>
                <th>CRM</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <!-- Aqui você deve buscar e exibir os médicos do banco de dados -->
            <!-- Exemplo: -->
            <?php
            $sql = "SELECT * FROM medicos";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>{$row['id']}</td>";
                    echo "<td>{$row['nome']}</td>";
                    echo "<td>{$row['especialidade']}</td>";
                    echo "<td>{$row['CRM']}</td>";
                    echo "<td>{$row['telefone']}</td>";
                    echo '<td><a href="editar_medico.php?id=' . $row['id'] . '" class="btn btn-warning btn-sm">Editar</a> ';
                    echo '<a href="excluir_medico.php?id=' . $row['id'] . '" class="btn btn-danger btn-sm">Excluir</a></td>';
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>Nenhum médico encontrado.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php include_once 'includes/footer.php'; ?>

<script src="js/bootstrap.bundle.min.js"></script>
<!-- Adicione outros scripts aqui -->
</body>
</html>
