<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    <h1>calculadora de salario liquido</h1>
   <form action="logica.php" method="POST">
        <label for="">Nome Funcionario:</label> 
        <input type="text" name="nome">
        <br><br>
         <label for="">salárioBruto:</label>
         <input type="number" name="salário_Bruto">
         <br><br>
         <label for="">HorasExtras:</label>
         <input type="number" name="Horas_Extras">
         <br><br>
         <label for="">Beneficios:</label>
         <input type="number" name="Beneficios">
         <br><br>
         <label for="">Desconto:</label>
         <input type="number" name="Desconto">
        <br><br>
        <button type="submit">calcular salario</button>
    </form>
</body>
</html>