<?php
session_start();


$host = "localhost";
$username = "root";
$password = "";
$database = "trabalho";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}


$nome = $_POST['nome'];
$senha = $_POST['senha'];


$query = "SELECT * FROM trabalho WHERE nome='$nome' AND senha='$senha'";
$result = $conn->query($query);

if ($result->num_rows == 1) {
    $_SESSION['nome'] = $nome;
    header("Location: dashboard.php");
} else {
    echo "Credenciais inválidas.";
}

$conn->close();
?>

