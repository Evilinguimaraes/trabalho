<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "trabalho";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}


$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmar_senha = $_POST['confirmar_senha'];


if (strlen($senha) < 8) {
    die("A senha deve ter no mínimo 8 caracteres.");
}


$query = "SELECT * FROM trabalho WHERE nome='$nome' OR email='$email'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    die("Nome de usuário ou email já cadastrado.");
}


$insert_query = "INSERT INTO trabalho (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

if ($conn->query($insert_query) === TRUE) {
    echo "Cadastro efetuado com sucesso!";
} else {
    echo "Erro ao cadastrar usuário: " . $conn->error;
}

$conn->close();
?>

