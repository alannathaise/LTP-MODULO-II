<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="_css/ordem.css">
        <link rel="shortcut icon" href="img/favicon.ico" />
        <title>Modelo</title>               
    </head>
    <body>

        <?php
        $nome = isset($_REQUEST["nome"]) ? $_REQUEST["nome"] : 0;
        $telefone = isset($_REQUEST["telefone"]) ? $_REQUEST["telefone"] : 0;
        $celular = isset($_REQUEST["celular"]) ? $_REQUEST["celular"] : 0;
        $marca = isset($_REQUEST["marca"]) ? $_REQUEST["marca"] : 0;
        $modelo = isset($_REQUEST["modelo"]) ? $_REQUEST["modelo"] : 0;
        $ano = isset($_REQUEST["ano"]) ? $_REQUEST["ano"] : 0;
        $placa = isset($_REQUEST["placa"]) ? $_REQUEST["placa"] :0;
        $combustivel = isset($_REQUEST["combustivel"]) ? $_REQUEST["combustivel"] : 0;
        $rads = isset($_REQUEST["rads"]) ? $_REQUEST["rads"] : 0;
        $odometroInicial = isset($_REQUEST["odometroInicial"]) ? $_REQUEST["odometroInicial"] : 0;
        $odometroFinal = isset($_REQUEST["odometroFinal"]) ? $_REQUEST["odometroFinal"] : 0;
        $oleo = isset($_REQUEST["oleo"]) ? $_REQUEST["oleo"] : 0;
        $radiador = isset($_REQUEST["radiador"]) ? $_REQUEST["radiador"] : 0;
        $fluido = isset($_REQUEST["fluido"]) ? $_REQUEST["fluido"] : 0;
        $cambio = isset($_REQUEST["cambio"]) ? $_REQUEST["cambio"] : 0;
        $adicionais = isset($_REQUEST["adicionais"]) ? $_REQUEST["adicionais"] : 0;

        $quilometragem = $odometroInicial - $odometroFinal;
        $proximaTroca = $odometroFinal + $rads;
        ?>

        <div>
            <br>
            <table border="1" width="80%" cellpadding="0" style="border-collapse: collapse">
                <tr>
                    <td>
                        <h2>OFICINA DE MANUTENÇÃO</h2>
                        <h2>TROCA DE ÓLEO</h2>
                        <h3>ORDEM DE SERVIÇO</h3>
                        <h4 align="center">Nº: <?php echo rand(1000000, 9000000)?> </h4>
                    </td>
                    <td width="285" align="center"><img src="img/logo_pb.jpg" /></td>
                </tr>
            </table>

            <p align="justify">PROPRIETÁRIO:</p>
            <table border="1" width="80%" cellpadding="0" style="border-collapse: collapse">
                <tr>
                    <td width="25%"><font>NOME</font></td>
                    <td colspan="3">&nbsp; <?php echo $nome ?> </td>
                </tr>
                <tr>
                    <td width="25%"><font>TELEFONE</font></td>
                    <td width="25%">&nbsp; <?php echo $telefone ?> </td>
                    <td width="25%"><font>CELULAR</font>:</td>
                    <td width="25%">&nbsp; <?php echo $celular ?> </td>
                </tr>
            </table>
            <p>CARACTERÍSTICAS E INFORMAÇÕES:</p>
            <table border="1" width="80%" cellpadding="0" style="border-collapse: collapse">
                <tr>
                    <td width="280"><font>MARCA</font></td>
                    <td>&nbsp; <?php echo $marca ?></td>
                </tr>
                <tr>
                    <td width="280"><font>MODELO</font></td>
                    <td>&nbsp; <?php echo $modelo ?></td>
                </tr>
                <tr>
                    <td width="280"><font>ANO DE FABRICAÇÃO</font></td>
                    <td>&nbsp; <?php echo $ano ?></td>
                </tr>
                <tr>
                    <td width="280"><font>PLACA</font></td>
                    <td>&nbsp; <?php echo $placa?></td>
                </tr>
                <tr>
                    <td width="280"><font>TIPO DE COMBUSTÍVEL</font></td>
                    <td>&nbsp; <?php echo $combustivel ?></td>
                </tr>
                <tr>
                    <td width="280"><font>TIPO DE ÓLEO</font></td>
                    <td>&nbsp; <?php
                        switch ($rads) {
                            case 5000:
                                echo 'Mineral. Troca a cada ' . $rads;
                                break;
                            case 20000:
                                echo 'Sintético. Troca a cada ' . $rads;
                                break;
                            case 8000:
                                echo 'Semi-sintético. Troca a cada ' . $rads;
                                break;
                        }
                        ?> </td>
                </tr>
                <tr>
                    <td width="280"><font>ÚLTIMA TROCA</font></td>
                    <td>&nbsp; <?php echo $odometroInicial ?> KM</td>
                </tr>
                <tr>
                    <td width="280"><font>QUILOMETRAGEM ATUAL</font></td>
                    <td>&nbsp; <?php echo $odometroFinal ?> KM</td>
                </tr>
                <tr>
                    <td width="280"><font>PRÓXIMA TROCA</font></td>
                    <td>&nbsp; <?php echo $proximaTroca ?> KM</td>
                </tr>
            </table>
            <p>SERVIÇOS:</p>
            <table border="1" width="80%" cellpadding="0" style="border-collapse: collapse">
                <tr>
                    <td width="836"><font>TROCÁR ÓLEO DO MOTOR?</font></td>
                    <td>&nbsp; <?php echo $oleo ?></td>
                </tr>
                <tr>
                    <td width="836"><font>TROCAR LIQUIDO DE ARREFECIMENTO?</font></td>
                    <td>&nbsp; <?php echo $radiador ?></td>
                </tr>
                <tr>
                    <td width="836"><font>TROCAR FLUIDO DE FREIO?</font></td>
                    <td>&nbsp; <?php echo $fluido ?></td>
                </tr>
                <tr>
                    <td width="836"><font>TROCAR ÓLEO DO CÂMBIO?</font></td>
                    <td width="20%">&nbsp; <?php echo $cambio ?></td>
                </tr>
            </table>

            <p class="h3">INFORMAÇÕES ADICIONAIS</p>
            <p><label><?php echo $adicionais ?></label>></p>

            <p align="center">Ceilândia, <?php echo date("d / m / Y"); ?></p>
            <p align="center">&nbsp;</p>
            <p align="center">__________________________________________</p>
            <p align="center">ASSINATURA</p>

            <form>
                <input type="button" value="IMPRIMIR" onClick="window.print()" />
            </form>
        </div>
    </body>
</html>
