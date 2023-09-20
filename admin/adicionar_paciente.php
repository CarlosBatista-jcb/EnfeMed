<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Paciente</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Adicione outros estilos aqui -->
</head>
<body>

<?php
// Inclua o arquivo de configuração do banco de dados ou qualquer configuração necessária
    include_once 'config.php';

$nome = $data_nascimento = $email = $celular = '';
$erro = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];

    // Realize validações aqui, se necessário

    // Insira os dados do paciente no banco de dados
    $sql = "INSERT INTO pacientes (nome, data_nascimento, email, celular) VALUES ('$nome', '$data_nascimento', '$email', '$celular')";
    if ($conn->query($sql) === TRUE) {
        header('Location: pacientes.php'); // Redireciona para a página de pacientes após adicionar
        exit();
    } else {
        $erro = "Erro ao adicionar paciente: " . $conn->error;
    }
}
?>



<?php include_once 'includes/header.php'; ?>

<div class="container mt-4">
    <h1>Adicionar Paciente</h1>

    <?php if (!empty($erro)) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $erro; ?>
        </div>
    <?php } ?>

    <form method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome Completo</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="mb-3">
            <label for="data_nascimento" class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="celular" class="form-label">Celular</label>
            <input type="text" class="form-control" id="celular" name="celular" required>
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</div>

<?php include_once 'includes/footer.php'; ?>

<script src="js/bootstrap.bundle.min.js"></script>
<!-- Adicione outros scripts aqui -->
</body>
</html>
