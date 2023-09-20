<?php
$host = "localhost"; // Altere para o host do seu servidor
$username = "root"; // Altere para o seu nome de usuário do banco de dados
$password = ""; // Altere para a sua senha do banco de dados
$database = "enfemed_bd";

// Conexão com o banco de dados
$conn = new mysqli($host, $username, $password, $database);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}
?>

