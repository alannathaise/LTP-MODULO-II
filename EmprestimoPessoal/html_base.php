<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Empréstimo Pessoal</title>
    </head>

    <body>
        <div>
            <h2>SOLICITAÇÃO DE EMPRÉSTIMO PESSOAL</h2>

            <hr width="90%" />

            <h3>Dados Pessoais:</h3>
            <form method="POST" action="contrato.php">
                <p>Nome: <input type="text" name="nome" size="83"></p>
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
                    CEP: <input type="text" name="cep" size="20"></p>
                <p>Telefone Residencial: <input type="text" name="telefone" size="20"> Telefone 
                    Celular: <input type="text" name="celular" size="20"></p>
                <p> E-mail:
                    <input type="text" name="email" size="50"></p>
                <p>RG: <input type="text" name="rg" size="20"> CPF:
                    <input type="text" name="cpf" size="20"> Data de Nascimento:
                    <input type="date" name="nascimento" size="20"></p>

                <hr width="90%" />

                <h3 class="h3">Filiação:</h3>
                <p>Mãe: <input type="text" name="mae" size="20"></p>
                <p>Pai: <input type="text" name="pai" size="20"></p>

                <hr width="90%" />

                <h3 class="h3">Solicitação:</h3>
                <p>Renda Mensal:&nbsp; R$<input type="text" name="renda" size="20"> Valor 
                    Solicitado: R$<input type="text" name="valorSolicitado" size="20"></p>
                <p>Número de Parcelas: <input id="parcelas" type="number" name="parcelas" min="1" max="24">
                    Valor das Parcelas: <input type="text" name="valorParcelas" size="20"></p> 
                <p><input type="button" value="Calcular Valor"></p>
                <p>Declaro que li e aceito os termos e condições das cláusulas da 
                    contratação de crédito pessoal perante essa instituição financeira.</p>
                <p align="center">
                    <input type="checkbox" name="ciente" value="ON" style="float: left">
                    <input type="submit" value="ENVIAR" name="enviar" style="float: left"></p>
                <p align="center">&nbsp;</p>

                <hr width="90%" />

            </form>
            <p>&nbsp;</p>
        </div>

        <?php
        // put your code here
        ?>
    </body>
</html>