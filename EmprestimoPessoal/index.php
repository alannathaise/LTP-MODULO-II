<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="favicon.ico" />
        <link rel="stylesheet" href="_css/estilo.css" />
        <title>Empréstimo Pessoal</title>
    </head>

    <body>
        <div>
            <h2 class="h2">SOLICITAÇÃO DE EMPRÉSTIMO PESSOAL</h2>

            <table align="center">
                <td><img src="img/logo.png" /></td>
            </table>

            <hr width="90%" />

            <ul><h3 class="h3">Dados Pessoais:</h3></ul>
            <form method="GET" action="contrato.php" target="_blank">
                <p>Nome: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="nome" size="80"></p>
                <p>Endereço: <input type="text" name="endereco" size="80"></p>
                <p>Cidade: <input type="text" name="cidade" size="20">
                    Estado:<select id="estados" class="campo" name="estados">
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select> 

                    <input type="text" name="value" id="value" hidden="">
                    <input type="text" name="text" id="text" hidden="">

                    <script type="text/javascript">
                        function update() {
                            var select = document.getElementById('estados');
                            var option = select.options[select.selectedIndex];

                            document.getElementById('value').value = option.value;
                            document.getElementById('text').value = option.text;
                        }
                        update();
                    </script>

                    CEP: <input type="text" name="cep" size="20"></p>
                <p>Telefone Residencial: <input type="text" name="telefone" size="20"> Telefone 
                    Celular: <input type="text" name="celular" size="20"></p>
                <p> E-mail:
                    <input type="text" name="email" size="50"></p>
                <p>RG: <input type="text" name="rg" size="20"> CPF:
                    <input type="text" name="cpf" size="20"> Data de Nascimento:
                    <input type="date" name="nascimento" size="20"></p>

                <hr width="90%" />

                <ul><h3 class="h3">Filiação:</h3></ul>
                <p>Mãe: <input type="text" name="mae" size="83"></p>
                <p>Pai: &nbsp;&nbsp;<input type="text" name="pai" size="83"></p>

                <hr width="90%" />

                <ul><h3 class="h3">Solicitação:</h3></ul>
                <p>Renda Mensal: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" id="renda" name="renda" size="20" placeholder="R$ 0,00"> Valor 
                    Solicitado: &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" id="valorSolicitado" name="valorSolicitado" size="20" placeholder="R$ 0,00">
                </p>
                <p>
                    Número de Parcelas: <input id="parcelas" type="number" name="parcelas" min="1" max="24">
                    Valor das Parcelas: <input id="valorParcelas" type="text" name="valorParcelas" size="20"
                                               placeholder="R$ 0,00" value="" readonly="true">
                </p> 
                <p>
                    <input type="button" value="Calcular Valor" class="botao" onclick="resultado()">
                </p>

                <script>
                    function resultado() {
                        var renda = parseInt(document.getElementById('renda').value);
                        var valorSolicitado = parseInt(document.getElementById('valorSolicitado').value);
                        var parcelas = parseInt(document.getElementById('parcelas').value);

                        var valorParcelas = parseInt(document.getElementById('valorParcelas').value = valorSolicitado / parcelas);
                        var trinta = (renda * 30) / 100;

                        if (valorParcelas < trinta)
                            alert('Empréstimo aprovado!');
                        else
                            alert('Atenção! O valor das parcelas comprometem mais de 30% da sua renda mensal!');
                    }
                </script>                

                <p>Declaro que li e aceito os termos e condições das cláusulas da 
                    contratação de crédito pessoal perante essa instituição financeira.</p>
                
                <script>
                    function muda(el) {
                        el.nextElementSibling.disabled = !el.checked;
                    }
                </script>
                
                <p align="center">
                    <input type="checkbox" name="ciente" value="ON" style="float: left" onchange="muda(this);">
                    <input type="submit" value="ENVIAR" name="enviar" style="float: left" class="botao" disabled="true"></p>
                <p align="center">&nbsp;</p>

                <hr width="90%" />

            </form>
            <p>&nbsp;</p>

            <?php
            ?>

        </div>
    </body>
</html>