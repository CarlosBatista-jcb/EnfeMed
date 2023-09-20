<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Cabeçalho e metadados -->
</head>
<body>
<?php
// Incluir as configurações do banco de dados aqui
$host = "localhost";
$username = "root";
$password = "";
$database = "enfemed_bd";

$conn = new mysqli($host, $username, $password, $database);

// Verificar a conexão com o banco de dados
if ($conn->connect_error) {
    die("Erro de conexão com o banco de dados: " . $conn->connect_error);
}

// Processar o formulário de login
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["usuario"];
    $password = $_POST["senha"];

    // Incluir as configurações do banco de dados aqui
    $host = "localhost";
    $username_db = "root";
    $password_db = "";
    $database = "enfemed_bd";

    $conn = new mysqli($host, $username_db, $password_db, $database);

    if ($conn->connect_error) {
        die("Erro de conexão com o banco de dados: " . $conn->connect_error);
    }

    $sql = "SELECT id, usuario, senha FROM administradores WHERE usuario = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["senha"])) {
            $_SESSION["usuario"] = $row["usuario"];
            $_SESSION["id"] = $row["id"];
            header("Location: index.php"); // Redirecionar para a página principal
        } else {
            echo "Login falhou. Verifique suas credenciais.";
        }
    } else {
        echo "Login falhou. Verifique suas credenciais.";
    }

    $conn->close();
}
?>
</body>
</html>