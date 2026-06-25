<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="img/favicon.ico" />
        <link rel="stylesheet" href="css/estilo.css" />
        <title>Pedido de Pizza</title>
    </head>
    <body>
        <div class="container">
            <form method="POST" action="pedido.php" target="_blank">

                <h2>PIZZARIA ARTESANAL</h2>
                <h2 class="h2">ESPECIALIDADES DA CASA</h2>

                <table align="center">
                    <td><img src="img/logo.png" width="200" /></td>
                </table>

                <hr width="90%" />

                <ul><h3 class="h3">CLIENTE:</h3></ul>
                <p>NOME: <input type="text" name="nome" size="80" class="campo" /></p>
                <p>TELEFONE: <input type="text" name="telefone" size="20" class="campo" />
                    WHATSAPP: <input type="text" name="whatsapp" size="20" class="campo" /></p>

                <hr width="90%" />

                <ul><h3 class="h3">PIZZA:</h3></ul>
                <p>SABOR: <select class="campo" name="sabor">
                        <?php
                        $saboresSalgados = array(
                            "Calabresa" => 46,
                            "Mussarela" => 40,
                            "Portuguesa" => 48,
                            "Frango c/ Catupiry" => 50,
                            "Quatro Queijos" => 54,
                            "Margherita" => 42,
                            "Atum" => 52,
                            "Bacon" => 50,
                            "Carne Seca c/ Catupiry" => 58,
                            "Rúcula c/ Tomate Seco" => 54,
                            "Brócolis c/ Bacon" => 52,
                            "Pepperoni" => 52
                        );
                        $saboresDoces = array(
                            "Chocolate" => 44,
                            "Brigadeiro" => 46,
                            "Prestígio" => 48,
                            "Sensação" => 50,
                            "Banana c/ Canela" => 42,
                            "Romeu e Julieta" => 44,
                            "Morango c/ Chocolate" => 50,
                            "Nutella c/ Morango" => 56,
                            "Doce de Leite" => 44,
                            "Churros" => 48
                        );

                        echo '<optgroup label="SALGADAS">';
                        foreach ($saboresSalgados as $sabor => $preco) {
                            echo "<option value='$sabor|$preco'> $sabor - R$ " . number_format($preco, 2, ',', '.') . " </option>";
                        }
                        echo '</optgroup>';

                        echo '<optgroup label="DOCES">';
                        foreach ($saboresDoces as $sabor => $preco) {
                            echo "<option value='$sabor|$preco'> $sabor - R$ " . number_format($preco, 2, ',', '.') . " </option>";
                        }
                        echo '</optgroup>';
                        ?>
                    </select>
                    BORDA: <select class="campo" name="borda">
                        <option value="Sem borda|0">Sem borda</option>
                        <option value="Catupiry|8">Catupiry - R$ 8,00</option>
                        <option value="Cheddar|8">Cheddar - R$ 8,00</option>
                        <option value="Chocolate|9">Chocolate - R$ 9,00</option>
                    </select>
                </p><br>

                <p>TAMANHO DA PIZZA:</p>
                <p>&nbsp;
                    <input type="radio" name="tamanho" value="Pequena (25cm)|0"> PEQUENA (25cm) - SEM ACRÉSCIMO<br>&nbsp;
                    <input type="radio" name="tamanho" value="Média (30cm)|8" checked> MÉDIA (30cm) - + R$ 8,00<br>&nbsp;
                    <input type="radio" name="tamanho" value="Grande (35cm)|16"> GRANDE (35cm) - + R$ 16,00<br>&nbsp;
                    <input type="radio" name="tamanho" value="Família (40cm)|26"> FAMÍLIA (40cm) - + R$ 26,00</p><br>

                <p>FORMA DE ENTREGA:</p>
                <p>&nbsp;
                    <input type="radio" name="rads" value="6" id="MODOENTREGA"> ENTREGA EM CASA (TAXA R$ 6,00)
                    <input type="radio" name="rads" value="0" id="MODOENTREGA"> RETIRAR NA LOJA (SEM TAXA)</p><br>

                <p>VALOR TOTAL APROXIMADO DO PEDIDO:
                    <input type="text" name="" size="20" class="campo" id="inicial" placeholder="Valor da pizza + borda" />
                    <input type="button" value="CALCULAR" class="botao" onclick="calcularTotal()"/></p>

                <script>
                    function getRadioValor(name) {
                        var rads = document.getElementsByName(name);
                        for (var i = 0; i < rads.length; i++) {
                            if (rads[i].checked) {
                                return rads[i].value;
                            }
                        }
                        return null;
                    }

                    function calcularTotal() {
                        var sabor = document.getElementsByName('sabor')[0].value.split('|');
                        var borda = document.getElementsByName('borda')[0].value.split('|');
                        var tamanho = (getRadioValor('tamanho') || 'Média (30cm)|8').split('|');
                        var entrega = parseFloat(getRadioValor('rads')) || 0;

                        var precoSabor = parseFloat(sabor[1]) || 0;
                        var precoBorda = parseFloat(borda[1]) || 0;
                        var precoTamanho = parseFloat(tamanho[1]) || 0;

                        var total = precoSabor + precoBorda + precoTamanho + entrega;
                        document.getElementById('inicial').value = 'R$ ' + total.toFixed(2).replace('.', ',');
                    }
                </script>

                <hr width="90%" />

                <ul><h3 class="h3">ADICIONAIS:</h3></ul>

                <table border="0" width="90%" align="center" cellspacing="0" cellpadding="4" style="margin-left:5em;">
                    <col style="width:55%">
                    <col style="width:10%">
                    <col style="width:15%">
                    <col style="width:10%">
                    <col style="width:15%">
                    <tr>
                        <td><p style="margin:0">ORÉGANO EXTRA?</p></td>
                        <td><label style="white-space:nowrap"><input type="radio" name="adicional_oregano" value="SIM"> SIM</label></td>
                        <td></td>
                        <td><label style="white-space:nowrap"><input type="radio" name="adicional_oregano" value="NÃO" checked> NÃO</label></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><p style="margin:0">PIMENTA CALABRESA?</p></td>
                        <td><label style="white-space:nowrap"><input type="radio" name="adicional_pimenta" value="SIM"> SIM</label></td>
                        <td></td>
                        <td><label style="white-space:nowrap"><input type="radio" name="adicional_pimenta" value="NÃO" checked> NÃO</label></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><p style="margin:0">AZEITE TEMPERADO?</p></td>
                        <td><label style="white-space:nowrap"><input type="radio" name="adicional_azeite" value="SIM"> SIM</label></td>
                        <td></td>
                        <td><label style="white-space:nowrap"><input type="radio" name="adicional_azeite" value="NÃO" checked> NÃO</label></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><p style="margin:0">ALHO CROCANTE?</p></td>
                        <td><label style="white-space:nowrap"><input type="radio" name="adicional_alho" value="SIM"> SIM</label></td>
                        <td></td>
                        <td><label style="white-space:nowrap"><input type="radio" name="adicional_alho" value="NÃO" checked> NÃO</label></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><p style="margin:0">TOMATE?</p></td>
                        <td><label style="white-space:nowrap"><input type="radio" name="adicional_tomate" value="SIM"> SIM</label></td>
                        <td></td>
                        <td><label style="white-space:nowrap"><input type="radio" name="adicional_tomate" value="NÃO" checked> NÃO</label></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><p style="margin:0">CEBOLA?</p></td>
                        <td><label style="white-space:nowrap"><input type="radio" name="adicional_cebola" value="SIM"> SIM</label></td>
                        <td></td>
                        <td><label style="white-space:nowrap"><input type="radio" name="adicional_cebola" value="NÃO" checked> NÃO</label></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><p style="margin:0">MILHO?</p></td>
                        <td><label style="white-space:nowrap"><input type="radio" name="adicional_milho" value="SIM"> SIM</label></td>
                        <td></td>
                        <td><label style="white-space:nowrap"><input type="radio" name="adicional_milho" value="NÃO" checked> NÃO</label></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><p style="margin:0">AZEITONA?</p></td>
                        <td><label style="white-space:nowrap"><input type="radio" name="adicional_azeitona" value="SIM"> SIM</label></td>
                        <td></td>
                        <td><label style="white-space:nowrap"><input type="radio" name="adicional_azeitona" value="NÃO" checked> NÃO</label></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><p style="margin:0">CHAMPIGNON?</p></td>
                        <td><label style="white-space:nowrap"><input type="radio" name="adicional_champignon" value="SIM"> SIM</label></td>
                        <td></td>
                        <td><label style="white-space:nowrap"><input type="radio" name="adicional_champignon" value="NÃO" checked> NÃO</label></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><p style="margin:0">PROVOLONE?</p></td>
                        <td><label style="white-space:nowrap"><input type="radio" name="adicional_provolone" value="SIM"> SIM</label></td>
                        <td></td>
                        <td><label style="white-space:nowrap"><input type="radio" name="adicional_provolone" value="NÃO" checked> NÃO</label></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><p style="margin:0">CATUPIRY?</p></td>
                        <td><label style="white-space:nowrap"><input type="radio" name="adicional_catupiry" value="SIM"> SIM</label></td>
                        <td></td>
                        <td><label style="white-space:nowrap"><input type="radio" name="adicional_catupiry" value="NÃO" checked> NÃO</label></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><p style="margin:0">CHEDDAR?</p></td>
                        <td><label style="white-space:nowrap"><input type="radio" name="adicional_cheddar" value="SIM"> SIM</label></td>
                        <td></td>
                        <td><label style="white-space:nowrap"><input type="radio" name="adicional_cheddar" value="NÃO" checked> NÃO</label></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><p style="margin:0">MUÇARELA EXTRA?</p></td>
                        <td><label style="white-space:nowrap"><input type="radio" name="adicional_mucárela" value="SIM"> SIM</label></td>
                        <td></td>
                        <td><label style="white-space:nowrap"><input type="radio" name="adicional_mucárela" value="NÃO" checked> NÃO</label></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><p style="margin:0">PARMESÃO?</p></td>
                        <td><label style="white-space:nowrap"><input type="radio" name="adicional_parmesao" value="SIM"> SIM</label></td>
                        <td></td>
                        <td><label style="white-space:nowrap"><input type="radio" name="adicional_parmesao" value="NÃO" checked> NÃO</label></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><p style="margin:0">PALMITO?</p></td>
                        <td><label style="white-space:nowrap"><input type="radio" name="adicional_palmito" value="SIM"> SIM</label></td>
                        <td></td>
                        <td><label style="white-space:nowrap"><input type="radio" name="adicional_palmito" value="NÃO" checked> NÃO</label></td>
                        <td></td>
                    </tr>
                </table>

                <ul><h3 class="h3">ENDEREÇO DE ENTREGA</h3></ul>
                <p>ENDEREÇO: <input type="text" name="endereco" size="50" class="campo" /></p>
                <p>BAIRRO: <input type="text" name="bairro" size="30" class="campo" />
                    CIDADE: <input type="text" name="cidade" size="30" class="campo" /></p>
                <ul><h3 class="h3">OBSERVAÇÕES</h3></ul>
                <P><textarea cols="80" rows="6" name="observacoes" placeholder="Ex: sem cebola, ponto bem assado, alergia..."></textarea></P>

                <p>Confirmo que as informações acima estão corretas e desejo finalizar o pedido:

                    <script>
                        function muda(el) {
                            el.nextElementSibling.disabled = !el.checked;
                        }
                    </script>

                    <input type="checkbox" onchange="muda(this);">
                    <input type="submit" value="ENVIAR" name="enviar" class="botao" disabled="true"/>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="reset" value="LIMPAR" name="limpar" class="botao"/></p>

                <hr width="90%" />

            </form>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>