<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulário</title>
</head>
<body>
    <h1>cadastro de usuario</h1>
    <form action="LOGICA.php" method="POST">
        <label for="">Nome:</label>
        <br>
        <input type="text" name="nome">
        <br><br>
         <label for="">email:</label>
         <br>
        <input type="email" name="email">
        <br><br>
         <label for="">senha:</label>
         <br>
        <input type="password" name="senha">
        <br><br>
        <button type="submit">Enviar</button>
        <button type="reset">Limpar</button>
    </form>
    
</body>
</html>