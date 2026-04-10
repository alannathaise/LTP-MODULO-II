<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
</head>
<body>
    <form method="POST">
        <label>Insira um valor</label><br><br>
        <input type="number" name="num" step="0.1">
        <button type="submit">Enviar</button><br><br>
    </form>
    <?php
    $num=(float) ($_POST['num'] ?? 0);
    $valor = $num*0.3;

    echo "<h2>30% de $num é igual a $valor</h2>";
    ?>
    <a href="index.php">VOLTAR</a>
</body>
