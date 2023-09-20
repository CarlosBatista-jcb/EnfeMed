<?php $pageTitle = "Título da Página"; ?>
<?php include 'includes/header.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $horario = $_POST['horario'];
    $data = $_POST['data'];
    $id_medico = $_POST['id_medico'];
    $id_paciente = $_POST['id_paciente'];

    // Aqui você pode adicionar lógica para inserir os dados no banco de dados
    include 'includes/db_connection.php'; // Conexão com o banco de dados

    $sql = "INSERT INTO consultas (id_medico, id_paciente, horario, dia, mes) VALUES ('$id_medico', '$id_paciente', '$horario', '$data', '$mes')";

    if ($conn->query($sql) === TRUE) {
        echo "Consulta agendada com sucesso!";
    } else {
        echo "Erro ao agendar consulta: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Erro ao processar o formulário.";
}
?>



<?php include 'includes/footer.php'; ?>