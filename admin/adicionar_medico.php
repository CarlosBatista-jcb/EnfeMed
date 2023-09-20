<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Médico</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Adicione outros estilos aqui -->
</head>
<body>

<?php
// Inclua o arquivo de configuração do banco de dados ou qualquer configuração necessária
include_once 'config.php';

// Inicialize as variáveis de erro
$nomeErro = $especialidadeErro = $crmErro = $telefoneErro = "";
$nome = $especialidade = $crm = $telefone = "";

// Verifique se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validação dos campos (adicione aqui validações apropriadas)
    if (empty($_POST['nome'])) {
        $nomeErro = "O nome é obrigatório";
    } else {
        $nome = $_POST['nome'];
    }

    if (empty($_POST['especialidade'])) {
        $especialidadeErro = "A especialidade é obrigatória";
    } else {
        $especialidade = $_POST['especialidade'];
    }

    if (empty($_POST['crm'])) {
        $crmErro = "O CRM é obrigatório";
    } else {
        $crm = $_POST['crm'];
    }

    if (empty($_POST['telefone'])) {
        $telefoneErro = "O telefone é obrigatório";
    } else {
        $telefone = $_POST['telefone'];
    }

    // Se não houver erros, insira os dados no banco de dados
    if (empty($nomeErro) && empty($especialidadeErro) && empty($crmErro) && empty($telefoneErro)) {
        $sql = "INSERT INTO medicos (nome, especialidade, CRM, telefone) VALUES ('$nome', '$especialidade', '$crm', '$telefone')";
        if ($conn->query($sql) === TRUE) {
            header('Location: medicos.php'); // Redireciona para a página de médicos após adicionar
            exit();
        } else {
            echo "Erro ao adicionar médico: " . $conn->error;
        }
    }
}
?>



<?php include_once 'includes/header.php'; ?>

<div class="container mt-4">
    <h1>Adicionar Médico</h1>
    <form method="POST" action="">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control <?php echo !empty($nomeErro) ? 'is-invalid' : ''; ?>"
                   id="nome" name="nome" value="<?php echo $nome; ?>" required>
            <div class="invalid-feedback"><?php echo $nomeErro; ?></div>
        </div>
        <div class="mb-3">
            <label for="especialidade" class="form-label">Especialidade</label>
            <input type="text" class="form-control <?php echo !empty($especialidadeErro) ? 'is-invalid' : ''; ?>"
                   id="especialidade" name="especialidade" value="<?php echo $especialidade; ?>" required>
            <div class="invalid-feedback"><?php echo $especialidadeErro; ?></div>
        </div>
        <div class="mb-3">
            <label for="crm" class="form-label">CRM</label>
            <input type="text" class="form-control <?php echo !empty($crmErro) ? 'is-invalid' : ''; ?>"
                   id="crm" name="crm" value="<?php echo $crm; ?>" required>
            <div class="invalid-feedback"><?php echo $crmErro; ?></div>
        </div>
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control <?php echo !empty($telefoneErro) ? 'is-invalid' : ''; ?>"
                   id="telefone" name="telefone" value="<?php echo $telefone; ?>" required>
            <div class="invalid-feedback"><?php echo $telefoneErro; ?></div>
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</div>

<?php include_once 'includes/footer.php'; ?>

<script src="js/bootstrap.bundle.min.js"></script>
<!-- Adicione outros scripts aqui -->
</body>
</html>
