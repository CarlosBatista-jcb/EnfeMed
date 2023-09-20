<?php $pageTitle = "Título da Página"; ?>
<?php include 'includes/header.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    // Aqui você pode adicionar lógica para salvar a mensagem no banco de dados, enviar emails, etc.

    // Exemplo: Salvar mensagem em um arquivo de texto
    $arquivo = 'mensagens_contato.txt';
    $conteudo = "Nome: $nome\nEmail: $email\nMensagem: $mensagem\n\n";
    file_put_contents($arquivo, $conteudo, FILE_APPEND);

    // Exemplo de mensagem de sucesso
    echo "Mensagem enviada com sucesso! Entraremos em contato em breve.";

} else {
    echo "Erro ao processar o formulário.";
}
?>

<?php include 'includes/footer.php'; ?>