<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>AULA 01 - PHP</title>
</head>
<body>
    <form method="POST">
        <label>Digite seu nome:</label><br><br>
        <input type="text" name="nome" require /><br><br>
        <button type="submit">RESPONDER</button><br><br>
    </form>
    <?php
    $nome = $_POST['nome' ?? '']

    echo "<h2>Olá, $nome</h2>"
    ?>
</body>
