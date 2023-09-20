<?php
// Inclua o arquivo de configuração do banco de dados ou qualquer configuração necessária
include_once 'config.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $consulta_id = $_GET['id'];

    // Verifique se a consulta está agendada
    $consulta_sql = "SELECT * FROM consultas WHERE id = $consulta_id";
    $consulta_resultado = $conn->query($consulta_sql);

    if ($consulta_resultado->num_rows == 1) {
        // Consulta agendada encontrada, vamos excluir
        $excluir_sql = "DELETE FROM consultas WHERE id = $consulta_id";
        if ($conn->query($excluir_sql) === TRUE) {
            header('Location: consultas.php'); // Redireciona para a página de consultas após excluir
            exit();
        } else {
            $erro = "Erro ao excluir consulta: " . $conn->error;
        }
    } else {
        $erro = "Consulta não encontrada.";
    }
} else {
    $erro = "ID de consulta inválido.";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Consulta</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Adicione outros estilos aqui -->
</head>
<body>

<?php include_once 'includes/header.php'; ?>

<div class="container mt-4">
    <h1>Excluir Consulta</h1>

    <?php if (!empty($erro)) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $erro; ?>
        </div>
    <?php } else { ?>
        <div class="alert alert-success" role="alert">
            Consulta excluída com sucesso.
        </div>
    <?php } ?>

    <a href="consultas.php" class="btn btn-primary">Voltar para Consultas</a>
</div>

<?php include_once 'includes/footer.php'; ?>

<script src="js/bootstrap.bundle.min.js"></script>
<!-- Adicione outros scripts aqui -->
</body>
</html>
