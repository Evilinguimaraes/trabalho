<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Usuários</title>
</head>
<body>
    <h2>Cadastro de Usuários</h2>
    <form method="post" action="registro_processo.php">
        <input type="text" name="nome" placeholder="Nome" required><br><br>
        <input type="email" name="email" placeholder="Email" required><br><br>
        <input type="password" name="senha" placeholder="Senha (mínimo de 8 caracteres)" required><br><br>
        <input type="password" name="confirmar_senha" placeholder="Confirmar Senha" required><br><br>
        <button type="submit">Cadastrar</button>
    </form>

    <style>
   body{
    background-color:cadetblue;
   
   }
   </style>

</body>
</html>
