<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Cabeçalho e metadados -->
</head>
<body>

<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "enfemed_bd";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Erro de conexão com o banco de dados: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $sql = "INSERT INTO administradores (usuario, senha) VALUES ('$usuario', '$senha')";

    if ($conn->query($sql) === TRUE) {
        echo "Administrador cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar administrador: " . $conn->error;
    }
}

$conn->close();
?>
</body>
</html>