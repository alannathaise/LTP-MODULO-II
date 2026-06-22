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

                <h2 class="h2">CARDAPIO</h2>

                <table align="center">
                    <td><img src="img/logo.png" width="120" /></td>
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
                </p>

                <p>TAMANHO DA PIZZA:</p>
                <P>&nbsp;
                    <input type="radio" name="tamanho" value="Pequena (25cm)|0" id="tam"> PEQUENA (25cM) - SEM ACRÉSCIMO
                    <input type="radio" name="tamanho" value="Média (30cm)|8" id="tam" checked> MÉDIA (30cm) - + R$ 8,00
                    <input type="radio" name="tamanho" value="Grande (35cm)|16" id="tam"> GRANDE (35cm) - + R$ 16,00
                    <input type="radio" name="tamanho" value="Família (40cm)|26" id="tam"> FAMÍLIA (40cm) - + R$ 26,00</p>

                <p>FORMA DE ENTREGA:</p>
                <p>&nbsp;
                    <input type="radio" name="rads" value="6" id="MODOENTREGA"> ENTREGA EM CASA (TAXA R$ 6,00)
                    <input type="radio" name="rads" value="0" id="MODOENTREGA"> RETIRAR NA LOJA (SEM TAXA)</p>

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

                <table border="0" width="90%" align="left" cellspacing="0" cellpadding="0">
                    <tr>
                        <td><p>BACON CROCANTE? (+R$ 7,00)</p></td>
                        <td><p><input type="checkbox" name="adicional_bacon" value="SIM"> SIM</p></td>
                    </tr>
                    <tr>
                        <td><p>QUEIJO DUPLO? (+R$ 10,00)</p></td>
                        <td><p><input type="checkbox" name="adicional_queijo" value="SIM"> SIM</p></td>
                    </tr>
                    <tr>
                        <td><p>CHAMPIGNON? (+R$ 6,00)</p></td>
                        <td><p><input type="checkbox" name="adicional_champignon" value="SIM"> SIM</p></td>
                    </tr>
                    <tr>
                        <td><p>RÚCULA FRESCA? (+R$ 5,00)</p></td>
                        <td><p><input type="checkbox" name="adicional_rucula" value="SIM"> SIM</p></td>
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