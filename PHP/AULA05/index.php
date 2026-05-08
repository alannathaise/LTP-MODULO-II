<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1</title>
</head>
<body>
<?php
$valor = floatval(readline("Valor da parcela: R$ "));
$situacao = intval(readline("(1) Antes  (2) No dia  (3) Depois: "));

switch ($situacao) {
    case 1:
        $final = $valor * (1 - 0.15);
        echo "Desconto de 15%. Total: R$ " . number_format($final, 2, ',', '.');
        break;
    case 2:
        $final = $valor * (1 - 0.05);
        echo "Desconto de 5%. Total: R$ " . number_format($final, 2, ',', '.');
        break;
    case 3:
        $final = $valor * (1 + 0.20);
        echo "Acréscimo de 20%. Total: R$ " . number_format($final, 2, ',', '.');
        break;
    default:
        echo "Opção inválida.";
}
?>
</body>
