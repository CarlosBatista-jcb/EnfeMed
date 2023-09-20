<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testar Conexão - EnfeMed</title>
</head>
<body>
    <h1>Testar Conexão com o Banco de Dados</h1>
    <form action="" method="post">
        <button type="submit" name="testar_conexao">Conectar</button>
    </form>

    <?php
    if (isset($_POST['testar_conexao'])) {
        require 'includes/db_connection.php'; // Carregar o arquivo de conexão

        // Verificar a conexão
        if ($conn->connect_error) {
            echo "Falha na conexão com o banco de dados: " . $conn->connect_error;
        } else {
            echo "Conexão bem-sucedida com o banco de dados!";
        }
    }
    ?>
</body>
</html>