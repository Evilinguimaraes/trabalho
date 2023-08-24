<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
   body{
    background-color:darkseagreen;
   }

    
    </style>
    <form method="post" action="registro_processo.php">
    <input type="text" name="nome" placeholder="Nome" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="senha" placeholder="Senha (mínimo de 8 caracteres)" required>
    <input type="password" name="confirmar_senha" placeholder="Confirmar Senha" required>
    <button type="submit">Cadastrar</button>

</form>

</body>
</html>

