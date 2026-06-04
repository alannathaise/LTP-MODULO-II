<html>

    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="favicon.ico" />
        <link rel="stylesheet" href="_css/estilo.css" />
        <title>Formulário de Matrícula Escolar</title>
    </head>

    <body>
        <div>
            <h2 class="h2">Formulário de Matrícula Escolar</h2><br>

            <table align="center">
                <td><img src="img/logo.png" /></td>
            </table>

            <hr width="90%" />

            <ul><h3 class="h3">Caros Pais e/ou Responsáveis,</h3></ul>

            <p>Bem-vindos ao nosso Centro de Admissão Escolar. Por favor, use este formulário 
                para solicitar a admissão de seu filho à nossa escola. Nós precisamos de 
                informações completas e precisas sobre o estudante, portanto, certifique-se de 
                preencher todos os campos.<br>
                <br>
                Formulários de Matrícula Escolar são processados dentro de 48 horas. Você 
                receberá um e-mail de confirmação quando nós processarmos sua solicitação.
            </p>

            <hr width="90%" />

            <form method="GET" action="matricula_efetuada.php" target="_blank">

                <ul><h2 class="subtit">Dados Pessoais:</h2></ul>
                <p>Nome completo: <input class="campo" type="text" name="nome" size="52"> Série atual:
                    <input class="campo" type="text" name="serie" size="12"></p>
                <p>Data de nascimento: <input class="campo" id="date" type="date" name="data" size="10"> 
                    Naturalidade:
                    <input class="campo" type="text" name="naturalidade" size="20"> </p>
                    <p>Estado: 
                    <select id="estados" class="campo" name="estados" onchange="update()">
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
                    </select></p>

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

                <p>Sexo: 
                    <input type="radio" name="sexo" value="masculino" > Masculino
                    <input type="radio" name="sexo" value="feminino" > Feminino
                    <input type="radio" name="sexo" value="não informado" > Não informado
                </p>

                <hr width="90%" />

                <ul><h2 class="subtit">Filiação:</h2></ul>
                <p>Pai: &nbsp;&nbsp;<input class="campo" type="text" name="pai" size="56"></p>
                <p>Mãe: <input class="campo" type="text" name="mae" size="56"></p>

                <hr  width="90%" />

                <ul><h2 class="subtit">Endereço:</h2></ul>
                <p>Logradouro: <input class="campo" type="text" name="logradouro" size="87"></p>
                <p>Cidade: <input class="campo" type="text" name="cidade" size="28"> Estado: 
                    <select id="estados0" class="campo" name="estados0" onchange="recupera()">
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

                    <input type="text" name="value0" id="value0" hidden="">
                    <input type="text" name="text0" id="text0" hidden="">

                    <script type="text/javascript">
                        function recupera() {
                            var select = document.getElementById('estados0');
                            var option = select.options[select.selectedIndex];

                            document.getElementById('value0').value = option.value;
                            document.getElementById('text0').value = option.text;
                        }
                        recupera();
                    </script>

                    CEP: <input class="campo" type="text" name="cep" size="20"></p>
                <p>Telefone Residencial: <input class="campo" type="text" name="telefone" size="20"> Telefone 
                    Celular: <input class="campo" type="text" name="celular" size="20"> </p>
                <p>E-mail: <input class="campo" type="text" name="email" size="50"></p>

                <hr width="90%" />

                <ul><h2 class="subtit">Informações complementares:</h2></ul>
                <p>Há alguma informação médica relacionada ao estudante, que você gostaria 
                    que a escola estivesse ciente?</p>
                <p><input type="radio" name="infoMedica" value="sim">Sim
                    <input type="radio" name="infoMedica" value="não" checked>Não</p>
                <p>Você deseja solicitar serviços de transporte para o estudante?</p>
                <p><input type="radio" name="transporte" value="sim">Sim
                    <input type="radio" name="transporte" value="não" checked>Não</p>
                <p>O aluno necessita de alguma adaptação especial?</p>
                <p><input type="radio" name="especial" value="sim">Sim
                    <input type="radio" name="especial" value="não" checked>Não</p>

                <hr width="90%" />

                <p align="center">

                    <textarea cols="80" rows="10" readonly="true">                
                CONTRATO DE PRESTAÇÃO DE SERVIÇOS EDUCACIONAIS

CONTRATANTE: (Nome), (nacionalidade), (estado civil), (profissão), portador da cédula de identidade R.G. nº xxxxxxx e CPF/MF nº xxxxxx, residente e domiciliado na (Rua), (número), (bairro), (CEP), (Cidade), (Estado);

CONTRATADA: (Razão social), com sede na (Rua), (número), (bairro), (CEP), (Cidade), (Estado), inscrita no CNPJ sob o nº xxxxx, e no Cadastro Estadual sob o nº xxxxx, neste ato representada pelo senhor (Nome), (nacionalidade), (estado civil), (profissão), portador da cédula de identidade R.G. nº xxxxx e CPF/MF nº xxxxxx, residente e domiciliado na (Rua), (número), (bairro), (CEP), (Cidade), (Estado).

As partes acima acordam com o presente Contrato de Prestação de Serviços Educacionais, que se regerá pelas cláusulas seguintes:

DO OBJETO DO CONTRATO

Cláusula 1ª. O OBJETO do presente instrumento é a prestação de serviços educacionais, pela CONTRATADA, sendo os mesmos prestados na Escola (Nome), localizada na (Rua), (número), (bairro), (CEP), (Cidade), (Estado), para o ano letivo de (ano), em favor de (Nome), representado neste instrumento pelo CONTRATANTE.

DA OBRIGAÇÂO DA CONTRATADA

Cláusula 2ª. Está obrigada a CONTRATADA em fornecer gratuitamente ao aluno, quaisquer certificados, em especial o de freqüência escolar bem como o de conclusão e os materiais pertinentes a realização das provas.

DOS DESCONTOS

Cláusula 3ª. Poderá a CONTRATADA, por sua iniciativa, oferecer ao aluno, neste instrumento representado pelo CONTRATANTE, abatimentos nas mensalidades, descriminados no boleto bancário mensal.

DO PAGAMENTO

Cláusula 4ª. É obrigação do CONTRATANTE, efetuar os pagamentos mensais para a CONTRATADA, da quantia mensal de R$ xxxx (Valor), referente aos serviços educacionais.

Cláusula 5ª. As mensalidades deverão ser pagas em qualquer banco até o vencimento ou após este, seguindo as intrusões no próprio boleto, podendo ainda ser realizada na sede da escola, localizada na (Rua), (número), (bairro), (CEP), (Cidade), (Estado), até o dia xx de cada mês.

DO INADIMPLEMENTO

Cláusula 6ª. Deixando o CONTRATANTE de efetuar o pagamento da mensalidade dentro do prazo estipulado, a este será imposta multa de xx% do valor da parcela, mais juros de x% ao mês.

DA RESCISÃO

Cláusula 7ª. Este CONTRATO pode ser rescindido por qualquer das partes, não havendo necessidade de aviso a parte contraria, porem todas as parcelas devem estar pagas na ocasião.

Cláusula 8ª. Pode a CONTRATADA rescindir o presente contrato, após reunião interna do conselho de professores, por indisciplina do aluno representado neste instrumento, ou por inadimplência do CONTRATANTE, por mais de xx meses consecutivos, sendo o mesmo avisado antecipadamente dos débitos.

Cláusula 9ª. Ocorrendo a rescisão, o aluno será desligado da Escola (Nome) a partir do final do ano letivo, ficando obrigado a instituição de ensino, fornecer todos os documentos necessários para que o aluno efetive sua transferência.

DO PRAZO

Cláusula 10ª. Este contrato tem duração de xx meses, contando-se a partir de xx/xx/xx vigorando até xx/xx/xx.

CONDIÇÕES GERAIS

Cláusula 11ª. Fica condicionada a validade deste contrato à matrícula regular do aluno.

Cláusula 12ª. A não freqüência do aluno nas aulas não obsta ao pagamento das parcelas mensais à CONTRATADA.

Cláusula 13ª. É responsável o CONTRATANTE em adquirir o material didatico do aluno matriculado, sujerido pela instituição para que o mesmo acompanhe as aulas.

DO FORO.

Cláusula 14ª. As partes elegem o foro da comarda de (Cidade), para dirimir quaisquer controvérsias oriundas do CONTRATO.
                    </textarea>

                </p>

                <p>Declaro que li e estou ciente que devo cumprir as normas que constam no 
                    Regulamento desta Instituição de ensino:</p>

                <script>
                    function muda(el) {
                        el.nextElementSibling.disabled = !el.checked;
                    }
                </script>

                <p><input type="checkbox" name="ciente" value="Ciente" onchange="muda(this);">
                <input class="botao" type="submit" value="Enviar" name="enviar" disabled="true"></p>
                
            </form>
            <p>&nbsp;</p>
        </div>
    </body>

</html>
