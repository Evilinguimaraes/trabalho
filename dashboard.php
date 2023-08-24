<?php
session_start();

if (!isset($_SESSION['nome'])) {
    header("Location: login.php");
    exit();
}

$nome = $_SESSION['nome'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Dashboard</h2>
    <p>Olá <?php echo $nome; ?></p>
    <form action="logout.php">
        <button type="submit">Deslogar</button>
    </form>
</body>
</html>
