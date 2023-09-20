<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Paciente</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Adicione outros estilos aqui -->
</head>
<body>
    
<?php
// Inclua o arquivo de configuração do banco de dados ou qualquer configuração necessária
include_once 'config.php';

$nome = $data_nascimento = $email = $celular = '';
$erro = '';

// Verifique se o ID do paciente foi fornecido na URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    // Consulta para buscar informações do paciente
    $sql = "SELECT * FROM pacientes WHERE id='$id'";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows == 1) {
        $row = $resultado->fetch_assoc();
        $nome = $row['nome'];
        $data_nascimento = $row['data_nascimento'];
        $email = $row['email'];
        $celular = $row['celular'];
    } else {
        header('Location: pacientes.php'); // Redireciona para a página de pacientes se o paciente não for encontrado
        exit();
    }
} else {
    header('Location: pacientes.php'); // Redireciona para a página de pacientes se o ID não for fornecido
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];

    // Realize validações aqui, se necessário

    // Atualize os dados do paciente no banco de dados
    $sql = "UPDATE pacientes SET nome='$nome', data_nascimento='$data_nascimento', email='$email', celular='$celular' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        header('Location: pacientes.php'); // Redireciona para a página de pacientes após editar
        exit();
    } else {
        $erro = "Erro ao editar paciente: " . $conn->error;
    }
}
?>



<?php include_once 'includes/header.php'; ?>

<div class="container mt-4">
    <h1>Editar Paciente</h1>

    <?php if (!empty($erro)) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $erro; ?>
        </div>
    <?php } ?>

    <form method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome Completo</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $nome; ?>" required>
        </div>
        <div class="mb-3">
            <label for="data_nascimento" class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" value="<?php echo $data_nascimento; ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="mb-3">
            <label for="celular" class="form-label">Celular</label>
            <input type="text" class="form-control" id="celular" name="celular" value="<?php echo $celular; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </form>
</div>

<?php include_once 'includes/footer.php'; ?>

<script src="js/bootstrap.bundle.min.js"></script>
<!-- Adicione outros scripts aqui -->
</body>
</html>
