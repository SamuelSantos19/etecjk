<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="matematica.php" method="get">
        <pre>
         <label for="">digite o primeiro numero:</label>
            <input type="number" name="numero1" id="">

            <label for="">digite o segundo numero:</label>
            <input type="number" name="numero2" id="">

            <label for="">escolha a operacao:</label>
            <select name="conta">
                <option value="1">Somar</option>
                <option value="2">Subtrair</option>
                <option value="3">Dividir</option>
                <option value="4">Multiplicar</option>
            </select>

            <input type="submit" value="enviar">    <input type="reset" value="limpar">
        </pre>
    </form>
</body>
</html>