<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Pacientes</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Adicione outros estilos aqui -->
</head>
<body>

<?php
// Inclua o arquivo de configuração do banco de dados ou qualquer configuração necessária
include_once 'config.php';

// Se houver um formulário de pesquisa enviado
if (isset($_GET['pesquisar'])) {
    $termo_pesquisa = $_GET['termo_pesquisa'];

    // Consulta para buscar pacientes com base no termo de pesquisa
    $sql = "SELECT * FROM pacientes WHERE nome LIKE '%$termo_pesquisa%' ORDER BY id DESC";
} else {
    // Consulta para buscar todos os pacientes
    $sql = "SELECT * FROM pacientes ORDER BY id DESC";
}

$resultado = $conn->query($sql);
?>



<?php include_once 'includes/header.php'; ?>

<div class="container mt-4">
    <h1>Gerenciar Pacientes</h1>
    
    <a href="adicionar_paciente.php" class="btn btn-success mb-2">Adicionar Paciente</a>
    
    <form class="mb-3">
        <div class="input-group">
            <input type="text" class="form-control" name="termo_pesquisa" placeholder="Digite o nome do paciente">
            <button type="submit" class="btn btn-primary" name="pesquisar">Pesquisar</button>
        </div>
    </form>
    
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Data de Nascimento</th>
                <th>Email</th>
                <th>Celular</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row['id'] . '</td>';
                    echo '<td>' . $row['nome'] . '</td>';
                    echo '<td>' . $row['data_nascimento'] . '</td>';
                    echo '<td>' . $row['email'] . '</td>';
                    echo '<td>' . $row['celular'] . '</td>';
                    echo '<td>';
                    echo '<a href="editar_paciente.php?id=' . $row['id'] . '" class="btn btn-warning btn-sm">Editar</a> ';
                    echo '<a href="excluir_paciente.php?id=' . $row['id'] . '" class="btn btn-danger btn-sm">Excluir</a>';
                    echo '</td>';
                    echo '</tr>';
                }
            } else {
                echo '<tr><td colspan="6">Nenhum paciente encontrado.</td></tr>';
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
