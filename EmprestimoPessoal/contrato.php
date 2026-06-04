<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="favicon.ico" />
        <link rel="stylesheet" href="_css/contrato.css" />
        <title>Crédito Pessoal - Contrato</title>               
    </head>
    <body>

        <?php
        $nome = isset($_GET["nome"]) ? $_GET["nome"] : 0;
        $endereco = isset($_GET["endereco"]) ? $_GET["endereco"] : 0;
        $cidade = isset($_GET["cidade"]) ? $_GET["cidade"] : 0;
        $estados = isset($_GET["estados"]) ? $_GET["estados"] : 0;
        $cep = isset($_GET["cep"]) ? $_GET["cep"] : 0;
        $telefone = isset($_GET["telefone"]) ? $_GET["telefone"] : 0;
        $celular = isset($_GET["celular"]) ? $_GET["celular"] : 0;
        $email = isset($_GET["email"]) ? $_GET["email"] : 0;
        $rg = isset($_GET["rg"]) ? $_GET["rg"] : 0;
        $cpf = isset($_GET["cpf"]) ? $_GET["cpf"] : 0;
        $nascimento = isset($_GET["nascimento"]) ? $_GET["nascimento"] : 0;
        $mae = isset($_GET["mae"]) ? $_GET["mae"] : 0;
        $pai = isset($_GET["pai"]) ? $_GET["pai"] : 0;
        $valorSolicitado = isset($_GET["valorSolicitado"]) ? $_GET["valorSolicitado"] : 0;
        $parcelas = isset($_GET["parcelas"]) ? $_GET["parcelas"] : 0;
        $valorParcelas = isset($_GET["valorParcelas"]) ? $_GET["valorParcelas"] : 0;
        ?>

        <div><br><hr width="90%" />
            <h2>CONTRATO / SOLICITAÇÃO DE EMPRÉSTIMO PESSOAL </h2>

            <table align="center">
                <td><img src="img/logo_pb.jpg" /></td>
            </table>

            <hr width="90%" />

            <p>O BANCO FINANCE S.A., pelo presente contrato de empréstimo de dinheiro ao senhor <font><?php echo $nome ?></font> 
                domiciliado à <font><?php echo $endereco ?></font> na cidade de 
                <font><?php echo $cidade . " - " . $estados ?></font>, portado da Carteira de Identidade número 
                <font><?php echo $rg ?></font>, Cadastro de Pessoa Física (CPF) de número 
                <font><?php echo $cpf ?></font>, nascido em <font><?php echo $nascimento ?></font>,  
                filho de <font><?php echo $mae ?></font> e de <font><?php echo $pai ?></font> vêm propor ao 
                contratado o seguinte:</p>

            <p>CLÁUSULA 1ª - O BANCO FINANCE S.A. dá como empréstimo ao CONTRATANTE, mediante garantia de execução da dívida perante a 
                justiça e devidos cartórios locais para registros dos dividendos.</p>

            <p>CLÁUSULA 2ª - Na falta do pagamento do empréstimo na data aprazada, o CONTRATANTE pagará uma multa no percentual 
                de 5% mais juro moratório sobre o débito no percentual de 3,5%, por dia, acrescido de correção monetária 
                sobre o montante apurado, ficando o BANCO  FINANCE S.A. com direito de tomar posse do imóvel hipotecado, administrando-o 
                com amplos poderes, recebendo os aluguéis, dando recibos e utilizando os valores dos créditos em conta na 
                amortização do débito até completo pagamento da dívida.</p>

            <p>CLÁUSULA 3ª - Todos os encargos que venham a recair durante o período da contratação pelo BANCO 
                FINANCE S.A., sobre o referido valor, continuarão de responsabilidade do CONTRATANTE, devendo 
                ser acrescidos na dívida.</p>

            <p>CLÁUSULA 4ª – O CONTRATANTE acordou em receber qualquer comunicado de conta em atraso pelos números de 
                Telefone Residencial <font><?php echo $telefone ?></font> e celular <font><?php echo $celular ?></font>, 
                bem como através de aplicativos de mensagem (SMS ou WhatsApp).</p>

            <p>CLÁUSULA 6ª – O CONTRATANTE também informou o endereço de correio eletrônico <font><?php echo $email ?></font>
                para recebimento dos boletos de pagamento, pelo menos, sete dias úteis antes da data do vencimento.</p>

            <p>CLÁUSULA 8ª – O valor aprovado e liberado é de <font>R$</font>
                <font><?php echo $valorSolicitado = number_format($valorSolicitado, 2, ',', '.') ?></font> dividido em 
                <font><?php echo $parcelas ?></font> percelas de <font>R$</font>
                <font><?php echo $valorParcelas = number_format($valorParcelas, 2, ',', '.') ?></font> a vencer 
                no quinto dia útil de cada mês.</p>

            <p>CLÁUSULA 7ª – Fica eleito o foro desta cidade de, <font><?php echo $cidade . " - " . $estados ?></font>, 
                para dirimir qualquer dúvida referente a este contrato.</p>

            <p>E assim, por estarem plenamente contratados na forma acima, assinam o presente contrato na 
                presença de testemunhas que a tudo assistiram e conhecimento tiveram e em duas vias de igual teor.</p>

            <p>Ceilândia, <?php echo date("d / F / Y") ?></p><br><br>


            <p align="center">


                <font>_________________________________________________</font><br>
            <p>ASSINATURA DO CONTRATANTE</p>
        </p>

        <hr width="90%" /><br><br>
        <form>
            <input type="button" value="IMPRIMIR" onClick="window.print()"/>
        </form>
    </div>
</body>
</html>
