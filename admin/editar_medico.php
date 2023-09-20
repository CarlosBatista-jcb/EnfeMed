<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Médico</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Adicione outros estilos aqui -->
</head>
<body>
    
    <?php
include_once 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Consulta para obter os dados do médico pelo ID
    $medico_sql = "SELECT * FROM medicos WHERE id = $id";
    $medico_resultado = $conn->query($medico_sql);

    if ($medico_resultado->num_rows === 1) {
        $medico = $medico_resultado->fetch_assoc();
    } else {
        header("Location: medicos.php"); // Redirecionar se o médico não existir
        exit();
    }
} else {
    header("Location: medicos.php"); // Redirecionar se o ID não for fornecido
    exit();
}

// Consulta para obter as especialidades
$especialidades_sql = "SELECT * FROM especialidades";
$especialidades_resultado = $conn->query($especialidades_sql);

// Lógica para atualizar os dados do médico
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST['nome'];
    $id_especialidade = $_POST['especialidade'];
    $crm = $_POST['crm'];
    $telefone = $_POST['telefone'];

    $update_sql = "UPDATE medicos
                   SET nome = '$nome', id_especialidade = $id_especialidade, crm = '$crm', telefone = '$telefone'
                   WHERE id = $id";

    if ($conn->query($update_sql) === TRUE) {
        header("Location: medicos.php"); // Redirecionar após a atualização
        exit();
    } else {
        echo "Erro ao atualizar médico: " . $conn->error;
    }
}
?>



<?php include_once 'includes/header.php'; ?>

<div class="container mt-4">
    <h1>Editar Médico</h1>

    <form method="post">
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $medico['nome']; ?>" required>
    </div>
    <div class="form-group">
        <label for="especialidade">Especialidade:</label>
        <select class="form-control" id="especialidade" name="especialidade" required>
            <?php while ($especialidade = $especialidades_resultado->fetch_assoc()) { ?>
                <option value="<?php echo $especialidade['id']; ?>" <?php if ($especialidade['id'] === $medico['id_especialidade']) echo 'selected'; ?>>
                    <?php echo $especialidade['nome']; ?>
                </option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label for="crm">CRM:</label>
        <input type="text" class="form-control" id="crm" name="crm" value="<?php echo isset($medico['crm']) ? $medico['crm'] : ''; ?>" required>
    </div>
    <div class="form-group">
        <label for="telefone">Telefone:</label>
        <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo isset($medico['telefone']) ? $medico['telefone'] : ''; ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
    <a href="medicos.php" class="btn btn-secondary">Cancelar</a>
</form>

    
</div>

<?php include_once 'includes/footer.php'; ?>

<script src="js/bootstrap.bundle.min.js"></script>
<!-- Adicione outros scripts aqui -->
</body>
</html>
