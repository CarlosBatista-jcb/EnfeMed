<?php
// Configurações do banco de dados
$host = "localhost"; // Endereço do servidor do banco de dados
$usuario_bd = "root"; // Nome de usuário do banco de dados
$senha_bd = ""; // Senha do banco de dados
$banco_dados = "enfemed_bd"; // Nome do banco de dados

// Conexão com o banco de dados
$conn = new mysqli($host, $usuario_bd, $senha_bd, $banco_dados);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro de conexão com o banco de dados: " . $conn->connect_error);
}
?>
