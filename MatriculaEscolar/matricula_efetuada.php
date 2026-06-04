<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="favicon.ico" />
        <link rel="stylesheet" href="_css/matricula_efetuada.css" />
        <title>Cadastro Confirmado</title>
    </head>

    <body>

        <?php
        $nome = isset($_GET["nome"]) ? $_GET["nome"] : 0;
        $serie = isset($_GET["serie"]) ? $_GET["serie"] : 0;
        $data = isset($_GET["data"]) ? $_GET["data"] : 0;
        $naturalidade = isset($_GET["naturalidade"]) ? $_GET["naturalidade"] : 0;
        $text = isset($_GET["text"]) ? $_GET["text"] : 0;
        $value = isset($_GET["value"]) ? $_GET["value"] : 0;
        $text0 = isset($_GET["text0"]) ? $_GET["text0"] : 0;
        $value0 = isset($_GET["value0"]) ? $_GET["value0"] : 0;
        $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : 0;
        $pai = isset($_GET["pai"]) ? $_GET["pai"] : 0;
        $mae = isset($_GET["mae"]) ? $_GET["mae"] : 0;
        $logradouro = isset($_GET["logradouro"]) ? $_GET["logradouro"] : 0;
        $cidade = isset($_GET["cidade"]) ? $_GET["cidade"] : 0;
        $cep = isset($_GET["cep"]) ? $_GET["cep"] : 0;
        $telefone = isset($_GET["telefone"]) ? $_GET["telefone"] : 0;
        $celular = isset($_GET["celular"]) ? $_GET["celular"] : 0;
        $email = isset($_GET["email"]) ? $_GET["email"] : 0;
        $infoMedica = isset($_GET["infoMedica"]) ? $_GET["infoMedica"] : 0;
        $transporte = isset($_GET["transporte"]) ? $_GET["transporte"] : 0;
        $especial = isset($_GET["especial"]) ? $_GET["especial"] : 0;
        ?>

        <div>
            <h2 class="h2" align="center">Contrato de Prestação de Serviços Escolares</h2><br>

            <table align="center">
                <td><img src="img/logo.jpg" /></td>
            </table>

            <hr width="90%" />

            <p>Dados pessoais:</p>
            <p>Nome Completo: <font><?php echo $nome ?></font> Série atual: <font><?php echo $serie ?></font></p>
            <p>Data de nascimento: <font><?php echo $data ?></font> Naturalidade: 
                <font><?php echo $naturalidade ?></font> Estado: <font><?php echo  $value ?></font></p>
            <p>Sexo:<font><?php echo $sexo ?></font></p>

            <hr width="90%" />

            <p>Filiação:</p>
            <p>Pai:<font><?php echo $pai?></font></p>
            <p>Mãe:<font><?php echo $mae?></font></p>

            <hr width="90%" />

            <p>Endereço:</p>
            <p>Logradouro:<font><?php echo $logradouro ?></font></p>
            <p>Cidade: <font><?php echo $cidade?></font> Estado: <font> <?php echo $value0 ?></font> CEP: <font><?php echo $cep ?></font></p>
            <p>Telefone residencial: <font><?php echo $telefone ?></font>Telefone Celular: <font><?php echo $celular ?></font></p>
            <p>E-mail: <font><?php echo $email ?></font></p>

            <hr width="90%" />

            <p>Há alguma informação médica relacionada ao estudante, que você 
                gostaria que a escola estivesse ciente? <font><?php echo $infoMedica?></font></p>
            <p>Você deseja solicitar serviços de transporte para o estudante? <font><?php echo $transporte?></font></p>
            <p>O aluno necessita de alguma adaptação especial? <font><?php echo $especial?></font></p>

            <hr width="90%" />

            <p>Eu,&nbsp; declaro que li e estou ciente que devo cumprir as 
                normas que constam no Regulamento desta Instituição de ensino: </p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p class="p2" align="center">
                _________________________________________________________</p>
            <p class="p2" align="center">ASSINATURA</p>
            <p>&nbsp;</p>
            <form>
                <input type="button" value="IMPRIMIR" onClick="window.print()"/>
            </form>
        </div>
    </body>
</html>
