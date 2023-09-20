<?php $pageTitle = "Título da Página"; ?>
<?php include 'includes/header.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];

    // Aqui você pode adicionar lógica para inserir os dados no banco de dados

    include 'includes/db_connection.php'; // Conexão com o banco de dados

    $sql = "INSERT INTO pacientes (nome, data_nascimento, email, celular) VALUES ('$nome', '$data_nascimento', '$email', '$celular')";

    if ($conn->query($sql) === TRUE) {
        echo "Cadastro de paciente realizado com sucesso!";
    } else {
        echo "Erro no cadastro: " . $conn->error;
    }

    $conn->close();

} else {
    echo "Erro ao processar o formulário.";
}
?>
<?php include 'includes/footer.php'; ?>


