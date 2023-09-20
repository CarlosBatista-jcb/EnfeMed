<?php $pageTitle = "Título da Página"; ?>
<?php include 'includes/header.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $especialidade = $_POST['especialidade'];
    $crm = $_POST['crm'];
    $telefone = $_POST['telefone'];

    // Aqui você pode adicionar lógica para inserir os dados no banco de dados
    include 'includes/db_connection.php'; // Conexão com o banco de dados

    $sql = "INSERT INTO medicos (nome, especialidade, CRM, telefone) VALUES ('$nome', '$especialidade', '$crm', '$telefone')";

    if ($conn->query($sql) === TRUE) {
        echo "Médico cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar médico: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Erro ao processar o formulário.";
}
?>


<?php include 'includes/footer.php'; ?>