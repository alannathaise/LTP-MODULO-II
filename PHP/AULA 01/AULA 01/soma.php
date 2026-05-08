<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>SOMA</title>
</head>
<body>
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