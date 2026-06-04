<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="img/favicon.ico" />
        <link rel="stylesheet" href="_css/estilo.css" />
        <title>Troca de Óleo</title>
    </head>
    <body>
        <div>
            <form method="POST" action="ordemDeServico.php" target="_blank">

                <h2 class="h2">REVISÃO DE LUBRIFICANTES</h2>

                <table align="center">
                    <td><img src="img/logo.png" /></td>
                </table>

                <hr <hr width="90%" />

                <ul><h3 class="h3">PROPRIETÁRIO:</h3></ul>
                <p>NOME: <input type="text" name="nome" size="80" class="campo" /></p>
                <p>TELEFONE: <input type="text" name="telefone" size="20" class="campo" />
                    CELULAR: <input type="text" name="celular" size="20" class="campo" /></p>

                <hr width="90%" />

                <ul><h3 class="h3">VEÍCULO:</h3></ul>
                <p>MARCA: <input type="text" name="marca" size="20" class="campo" /> 
                    MODELO: <input type="text" name="modelo" size="20" class="campo" /> </p>
                <p> ANO DE FABRICAÇÃO: <select class="campo" name="ano">
                        <?php
                        for ($ano = 1930; $ano <= date('Y'); $ano++) {
                            echo $ano;
                            echo "<option value='$ano'> $ano </option><br>";
                        }
                        ?>
                    </select> PLACA: <input type="text" size="20" name="placa" class="campo" />
                    

                <p>TIPO DE COMBUSTÍVEL: </p>
                <P>&nbsp;
                    <input type="radio" name="combustivel" value="Gasolina"> GASOLINA
                    <input type="radio" name="combustivel" value="Alcool"> ALCOOL
                    <input type="radio" name="combustivel" value="Flex / Total Flex"> FLEX
                    <input type="radio" name="combustivel" value="Diesel"> DIESEL

                <p>TIPO DE ÓLEO USADO NO VEÍCULO:</p>
                <p>&nbsp;
                    <input type="radio" name="rads" value="5000" id="MINERAL"> MINERAL
                    <input type="radio" name="rads" value="20000" id="MINERAL"> SINTÉTICO
                    <input type="radio" name="rads" value="8000" id="MINERAL"> SEMI-SINTÉTICO</p>

                <p>ULTIMA TROCA DE ÓLEO (ODÔMETRO): 
                    <input type="text" name="odometroInicial" size="20" class="campo" id="inicial"/>
                    <input type="text" name="" hidden="true"></p>
                <p>QUILOMETRAGEM ATUAL (ODÔMETRO): 
                    <input type="text" name="odometroFinal" size="20" class="campo" id="final"/>
                    <input type="button" value="VERIFICAR" class="botao" onclick="troca()"/></p>

                <script>
                    function troca() {
                        var inicial = parseInt(document.getElementById('inicial').value);
                        var final = parseInt(document.getElementById('final').value);
                        if ((final - inicial) >= getRadioValor('rads')) {
                            alert('É Altamente recomentável a troca do óleo do motor.');
                        } else {
                            alert('Troca de óleo dentro do prazo.');
                        }
                    }
                    function getRadioValor(name) {
                        var rads = document.getElementsByName(name);

                        for (var i = 0; i < rads.length; i++) {
                            if (rads[i].checked) {
                                return rads[i].value;
                            }
                        }
                        return null;
                    }
                </script>

                <hr width="90%" />

                <ul><h3 class="h3">RESUMO DA MANUTENÇÃO:</h3></ul>

                <table border="0" width="90%" align="left" cellspacing="0" cellpadding="0">
                    <tr>
                        <td><p>TROCAR O ÓLEO DO MOTOR?</p></td>
                        <td><p><input type="radio" name="oleo" value="SIM"> SIM</p></td>
                        <td><p><input type="radio" name="oleo" value="NÃO"> NÃO</p></td>
                    </tr>
                    <tr>
                        <td><p>TROCAR ÁGUA DO RADIADOR?</p></td>
                        <td><p><input type="radio" name="radiador" value="SIM"> SIM</p></td>
                        <td><p><input type="radio" name="radiador" value="NÃO"> NÃO</p></td>
                    </tr>
                    <tr>
                        <td><p>TROCAR FLUIDO DE FREIO?</p></td>
                        <td><p><input type="radio" name="fluido" value="SIM"> SIM</p></td>
                        <td><p><input type="radio" name="fluido" value="NÃO"> NÃO</p></td>
                    </tr>
                    <tr>
                        <td><p>TROCAR ÓLEO DO CÂMBIO?</p></td>
                        <td><p><input type="radio" name="cambio" value="SIM"> SIM</p></td>
                        <td><p><input type="radio" name="cambio" value="NÃO"> NÃO</p></td>
                    </tr>
                </table>

                <ul><h3 class="h3">INFORMAÇÕES ADICIONAIS</h3></ul>
                <P><textarea cols="80" rows="10" name="adicionais"></textarea></P>

                <p>Autorizo a manutenão e os serviços acima especificados:

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
