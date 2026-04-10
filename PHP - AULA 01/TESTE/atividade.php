<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
</head>
<body>

<!-- SOMA -->
<form method="POST">
        <label>"Digite o 1° numero"</label><br><br>
        <input type="number" name="num01" required/><br><br>
        <label>"Digite o 2° numero"</label><br><br>
        <input type="submit" name="num02" required/><br><br>
        <button type="submit">Calcular</button><br><br>
    </form>
    <?php
    $soma = $_POST['num01']?? ''0;
    $soma = $_POST['num02']?? ''0;
    $soma = $_POST['num03'];

    echo "<h2>A soma é: &soma</h2>"
    ?>

</body>
</html>