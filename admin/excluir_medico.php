<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Médico</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Adicione outros estilos aqui -->
</head>
<body>



<?php
// Inclua o arquivo de configuração do banco de dados ou qualquer configuração necessária
include_once 'config.php';

// Verifique se o ID do médico foi fornecido na URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    // Verifique se há consultas associadas a este médico
    $sqlConsulta = "SELECT * FROM consultas WHERE id_medico='$id'";
    $resultConsulta = $conn->query($sqlConsulta);
    
    if ($resultConsulta->num_rows > 0) {
        echo "Não é possível excluir este médico, pois há consultas associadas a ele.";
        exit();
    }

    // Delete o médico do banco de dados
    $sql = "DELETE FROM medicos WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        header('Location: medicos.php'); // Redireciona para a página de médicos após excluir
        exit();
    } else {
        echo "Erro ao excluir médico: " . $conn->error;
    }
} else {
    echo "ID do médico não fornecido.";
    exit();
}
?>



<?php include_once 'includes/header.php'; ?>

<div class="container mt-4">
    <h1>Excluir Médico</h1>
    <p>Você tem certeza que deseja excluir este médico?</p>
    <a href="medicos.php" class="btn btn-secondary">Cancelar</a>
    <a href="excluir_medico.php?id=<?php echo $id; ?>&confirm=true" class="btn btn-danger">Excluir</a>
</div>

<?php include_once 'includes/footer.php'; ?>

<script src="js/bootstrap.bundle.min.js"></script>
<!-- Adicione outros scripts aqui -->
</body>
</html>
