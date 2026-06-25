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

        $adicional_oregano    = isset($_REQUEST["adicional_oregano"])    ? $_REQUEST["adicional_oregano"]    : "NÃO";
        $adicional_pimenta    = isset($_REQUEST["adicional_pimenta"])    ? $_REQUEST["adicional_pimenta"]    : "NÃO";
        $adicional_azeite     = isset($_REQUEST["adicional_azeite"])     ? $_REQUEST["adicional_azeite"]     : "NÃO";
        $adicional_alho       = isset($_REQUEST["adicional_alho"])       ? $_REQUEST["adicional_alho"]       : "NÃO";
        $adicional_tomate     = isset($_REQUEST["adicional_tomate"])     ? $_REQUEST["adicional_tomate"]     : "NÃO";
        $adicional_cebola     = isset($_REQUEST["adicional_cebola"])     ? $_REQUEST["adicional_cebola"]     : "NÃO";
        $adicional_milho      = isset($_REQUEST["adicional_milho"])      ? $_REQUEST["adicional_milho"]      : "NÃO";
        $adicional_azeitona   = isset($_REQUEST["adicional_azeitona"])   ? $_REQUEST["adicional_azeitona"]   : "NÃO";
        $adicional_champignon = isset($_REQUEST["adicional_champignon"]) ? $_REQUEST["adicional_champignon"] : "NÃO";
        $adicional_provolone  = isset($_REQUEST["adicional_provolone"])  ? $_REQUEST["adicional_provolone"]  : "NÃO";
        $adicional_catupiry   = isset($_REQUEST["adicional_catupiry"])   ? $_REQUEST["adicional_catupiry"]   : "NÃO";
        $adicional_cheddar    = isset($_REQUEST["adicional_cheddar"])    ? $_REQUEST["adicional_cheddar"]    : "NÃO";
        $adicional_mucarela   = isset($_REQUEST["adicional_muc\u00e1rela"]) ? $_REQUEST["adicional_muc\u00e1rela"] : "NÃO";
        $adicional_parmesao   = isset($_REQUEST["adicional_parmesao"])   ? $_REQUEST["adicional_parmesao"]   : "NÃO";
        $adicional_palmito    = isset($_REQUEST["adicional_palmito"])    ? $_REQUEST["adicional_palmito"]    : "NÃO";

        $endereco    = isset($_REQUEST["endereco"])    ? $_REQUEST["endereco"]    : "";
        $bairro      = isset($_REQUEST["bairro"])      ? $_REQUEST["bairro"]      : "";
        $cidade      = isset($_REQUEST["cidade"])      ? $_REQUEST["cidade"]      : "";
        $observacoes = isset($_REQUEST["observacoes"]) ? $_REQUEST["observacoes"] : "";

        $adicionais = array(
            "Orégano extra"     => $adicional_oregano,
            "Pimenta calabresa" => $adicional_pimenta,
            "Azeite temperado"  => $adicional_azeite,
            "Alho crocante"     => $adicional_alho,
            "Tomate"            => $adicional_tomate,
            "Cebola"            => $adicional_cebola,
            "Milho"             => $adicional_milho,
            "Azeitona"          => $adicional_azeitona,
            "Champignon"        => $adicional_champignon,
            "Provolone"         => $adicional_provolone,
            "Catupiry"          => $adicional_catupiry,
            "Cheddar"           => $adicional_cheddar,
            "Muçarela extra"    => $adicional_mucarela,
            "Parmesão"          => $adicional_parmesao,
            "Palmito"           => $adicional_palmito,
        );

        $taxaEntrega = floatval($rads);
        $totalPedido = floatval($precoSabor) + floatval($precoBorda) + floatval($precoTamanho) + $taxaEntrega;
        ?>

        <div>
            <br>
            <table border="1" width="80%" cellpadding="0" style="border-collapse: collapse">
                <tr>
                    <td>
                        <h2>COMPROVANTE</h2>
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
                    <td width="25%"><font>WHATSAPP</font></td>
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
                    <td width="280"><font>FORMA DE ENTREGA</font></td>
                    <td>&nbsp; <?php echo $taxaEntrega > 0 ? "Entrega em casa (Taxa R$ " . number_format($taxaEntrega, 2, ',', '.') . ")" : "Retirada na loja (Sem taxa)" ?></td>
                </tr>
            </table>

            <p>ADICIONAIS:</p>
            <table border="1" width="80%" cellpadding="0" style="border-collapse: collapse">
                <?php foreach ($adicionais as $nome_ad => $valor): ?>
                <tr>
                    <td width="50%">&nbsp; <font><?php echo strtoupper($nome_ad) ?></font></td>
                    <td>&nbsp; <?php echo $valor ?></td>
                </tr>
                <?php endforeach; ?>
            </table>

            <p>ENTREGA:</p>
            <table border="1" width="80%" cellpadding="0" style="border-collapse: collapse">
                <tr>
                    <td width="25%"><font>ENDEREÇO</font></td>
                    <td>&nbsp; <?php echo $endereco ?></td>
                </tr>
                <tr>
                    <td width="25%"><font>BAIRRO</font></td>
                    <td width="25%">&nbsp; <?php echo $bairro ?></td>
                </tr>
                <tr>
                    <td width="25%"><font>CIDADE</font></td>
                    <td>&nbsp; <?php echo $cidade ?></td>
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