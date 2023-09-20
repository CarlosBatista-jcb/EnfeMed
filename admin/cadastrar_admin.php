<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Cabeçalho e metadados -->
</head>
<body>
<?php include_once 'includes/header.php'; ?>
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

// Resto do código do arquivo cadastrar_admin.php
?>


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Cadastro de Administrador</div>
                <div class="card-body">
                    <form method="POST" action="processar_cadastro_admin.php">
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Usuário</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" required>
                        </div>
                        <div class="mb-3">
                            <label for="senha" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="senha" name="senha" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
// ... outras partes do seu código ...

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    // Hash da senha usando password_hash()
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    // Inserir o usuário e a senha_hash no banco de dados
    $sql = "INSERT INTO administradores (usuario, senha) VALUES ('$usuario', '$senha_hash')";

    if ($conn->query($sql) === TRUE) {
        echo "Administrador cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar administrador: " . $conn->error;
    }
}

$conn->close();
?>

<?php include_once 'includes/footer.php'; ?>
<script src="js/bootstrap.bundle.min.js"></script>
<!-- Outros scripts -->
</body>
</html>
