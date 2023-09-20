<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Paciente</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Adicione outros estilos aqui -->
</head>
<body>

<?php
// Inclua o arquivo de configuração do banco de dados ou qualquer configuração necessária
include_once 'config.php';

$erro = '';

// Verifique se o ID do paciente foi fornecido na URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    // Verifique se há consultas agendadas associadas a este paciente
    $consulta_sql = "SELECT * FROM consultas WHERE id_paciente='$id'";
    $resultado_consulta = $conn->query($consulta_sql);

    if ($resultado_consulta->num_rows > 0) {
        $erro = "Este paciente possui consultas agendadas e não pode ser excluído.";
    } else {
        // Exclua o paciente do banco de dados
        $sql = "DELETE FROM pacientes WHERE id='$id'";
        if ($conn->query($sql) === TRUE) {
            header('Location: pacientes.php'); // Redireciona para a página de pacientes após excluir
            exit();
        } else {
            $erro = "Erro ao excluir paciente: " . $conn->error;
        }
    }
} else {
    header('Location: pacientes.php'); // Redireciona para a página de pacientes se o ID não for fornecido
    exit();
}
?>



<?php include_once 'includes/header.php'; ?>

<div class="container mt-4">
    <h1>Excluir Paciente</h1>

    <?php if (!empty($erro)) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $erro; ?>
        </div>
    <?php } else { ?>
        <div class="alert alert-success" role="alert">
            Paciente excluído com sucesso.
        </div>
    <?php } ?>
</div>

<?php include_once 'includes/footer.php'; ?>

<script src="js/bootstrap.bundle.min.js"></script>
<!-- Adicione outros scripts aqui -->
</body>
</html>
