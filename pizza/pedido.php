<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/pedido.css">
        <link rel="shortcut icon" href="img/favicon.ico" />
        <title>Pedido</title>
    </head>
    <body>

        <?php
        $nome = isset($_REQUEST["nome"]) ? $_REQUEST["nome"] : 0;
        $telefone = isset($_REQUEST["telefone"]) ? $_REQUEST["telefone"] : 0;
        $whatsapp = isset($_REQUEST["whatsapp"]) ? $_REQUEST["whatsapp"] : 0;

        $saborRaw = isset($_REQUEST["sabor"]) ? $_REQUEST["sabor"] : "0|0";
        $bordaRaw = isset($_REQUEST["borda"]) ? $_REQUEST["borda"] : "0|0";
        $tamanhoRaw = isset($_REQUEST["tamanho"]) ? $_REQUEST["tamanho"] : "0|0";
        $rads = isset($_REQUEST["rads"]) ? $_REQUEST["rads"] : 0;

        list($sabor, $precoSabor) = explode("|", $saborRaw);
        list($borda, $precoBorda) = explode("|", $bordaRaw);
        list($tamanho, $precoTamanho) = explode("|", $tamanhoRaw);

        $adicional_bacon = isset($_REQUEST["adicional_bacon"]) ? $_REQUEST["adicional_bacon"] : "NÃO";
        $adicional_queijo = isset($_REQUEST["adicional_queijo"]) ? $_REQUEST["adicional_queijo"] : "NÃO";
        $adicional_champignon = isset($_REQUEST["adicional_champignon"]) ? $_REQUEST["adicional_champignon"] : "NÃO";
        $adicional_rucula = isset($_REQUEST["adicional_rucula"]) ? $_REQUEST["adicional_rucula"] : "NÃO";

        $pagamento = isset($_REQUEST["pagamento"]) ? $_REQUEST["pagamento"] : 0;
        $endereco = isset($_REQUEST["endereco"]) ? $_REQUEST["endereco"] : 0;
        $bairro = isset($_REQUEST["bairro"]) ? $_REQUEST["bairro"] : 0;
        $observacoes = isset($_REQUEST["observacoes"]) ? $_REQUEST["observacoes"] : 0;

        $precoAdicionais = 0;
        $listaAdicionais = array();
        if ($adicional_bacon == "SIM") { $precoAdicionais += 7; $listaAdicionais[] = "Bacon crocante (+R$ 7,00)"; }
        if ($adicional_queijo == "SIM") { $precoAdicionais += 10; $listaAdicionais[] = "Queijo duplo (+R$ 10,00)"; }
        if ($adicional_champignon == "SIM") { $precoAdicionais += 6; $listaAdicionais[] = "Champignon (+R$ 6,00)"; }
        if ($adicional_rucula == "SIM") { $precoAdicionais += 5; $listaAdicionais[] = "Rúcula fresca (+R$ 5,00)"; }
        $textoAdicionais = count($listaAdicionais) > 0 ? implode(", ", $listaAdicionais) : "Nenhum";

        $taxaEntrega = floatval($rads);
        $totalPedido = floatval($precoSabor) + floatval($precoBorda) + floatval($precoTamanho) + $precoAdicionais + $taxaEntrega;
        ?>

        <div>
            <br>
            <table border="1" width="80%" cellpadding="0" style="border-collapse: collapse">
                <tr>
                    <td>
                        <h2>FORNO DA VILA</h2>
                        <h2>PIZZARIA ARTESANAL</h2>
                        <h3>PEDIDO Nº: <?php echo rand(1000, 9999) ?></h3>
                        <h4 align="center">EMITIDO EM: <?php echo date("d/m/Y H:i") ?></h4>
                    </td>
                    <td width="285" align="center"><img src="img/logo.png" width="120" /></td>
                </tr>
            </table>

            <p align="justify">CLIENTE:</p>
            <table border="1" width="80%" cellpadding="0" style="border-collapse: collapse">
                <tr>
                    <td width="25%"><font>NOME</font></td>
                    <td colspan="3">&nbsp; <?php echo $nome ?> </td>
                </tr>
                <tr>
                    <td width="25%"><font>TELEFONE</font></td>
                    <td width="25%">&nbsp; <?php echo $telefone ?> </td>
                    <td width="25%"><font>WHATSAPP</font>:</td>
                    <td width="25%">&nbsp; <?php echo $whatsapp ?> </td>
                </tr>
            </table>

            <p>DETALHES DA PIZZA:</p>
            <table border="1" width="80%" cellpadding="0" style="border-collapse: collapse">
                <tr>
                    <td width="280"><font>SABOR</font></td>
                    <td>&nbsp; <?php echo $sabor ?> &nbsp; (R$ <?php echo number_format($precoSabor, 2, ',', '.') ?>)</td>
                </tr>
                <tr>
                    <td width="280"><font>TAMANHO</font></td>
                    <td>&nbsp; <?php echo $tamanho ?></td>
                </tr>
                <tr>
                    <td width="280"><font>BORDA</font></td>
                    <td>&nbsp; <?php echo $borda ?></td>
                </tr>
                <tr>
                    <td width="280"><font>ADICIONAIS</font></td>
                    <td>&nbsp; <?php echo $textoAdicionais ?></td>
                </tr>
                <tr>
                    <td width="280"><font>FORMA DE ENTREGA</font></td>
                    <td>&nbsp; <?php echo $taxaEntrega > 0 ? "Entrega em casa (Taxa R$ " . number_format($taxaEntrega, 2, ',', '.') . ")" : "Retirada na loja (Sem taxa)" ?></td>
                </tr>
            </table>

            <p>ENTREGA:</p>
            <table border="1" width="80%" cellpadding="0" style="border-collapse: collapse">
                <tr>
                    <td width="836"><font>ENDEREÇO</font></td>
                    <td>&nbsp; <?php echo $endereco ?></td>
                </tr>
                <tr>
                    <td width="836"><font>BAIRRO</font></td>
                    <td>&nbsp; <?php echo $bairro ?></td>
                </tr>
                <tr>
                    <td width="836"><font>FORMA DE PAGAMENTO</font></td>
                    <td width="20%">&nbsp; <?php echo $pagamento ?></td>
                </tr>
            </table>

            <p class="h3">OBSERVAÇÕES</p>
            <p><label><?php echo $observacoes ?></label></p>

            <p class="total" align="center">VALOR TOTAL: R$ <?php echo number_format($totalPedido, 2, ',', '.') ?></p>

            <p align="center">Ceilândia, <?php echo date("d / m / Y") ?></p>
            <p align="center">&nbsp;</p>
            <p align="center">__________________________________________</p>
            <p align="center">ASSINATURA</p>

            <form>
                <input type="button" value="IMPRIMIR" onClick="window.print()" />
            </form>
        </div>
    </body>
</html>