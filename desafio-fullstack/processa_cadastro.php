<?php include("conexao.php");?>

<html>
    <head>
        <title>Pagina de Cadastro de Beneficiario</title>
    </head>
<body>
    
    <?php
        $nome = $_POST['nome'];
        $documento = $_POST['documento'];
        $nascimento = $_POST['nascimento'];
        $sexo = $_POST['sexo'];
        $situacao = $_POST['situacao'];
        $logradouro = $_POST['logradouro'];
        $numero = $_POST['numero'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        
    

        if(isset($mysqli)){

            $sql = "INSERT INTO infor430_php_davidson.beneficiario (nome, documento, dataNascimento, sexo, situacao, logradouro, numero, bairro, cidade, estado, email, telefone)
            VALUES ('".$nome."', '".$documento."', '".$nascimento."', '".$sexo."', '".$situacao."', '".$logradouro."', '".$numero."', '".$bairro."', '".$cidade."', '".$estado."', '".$email."', '".$telefone."')";

            
            if ($mysqli->query($sql) === TRUE) {
                echo "<h1>Beneficiário Registrado</h1>";
            } else {
                echo "Erro: " . $sql . "<br>" . $mysqli->error;
            }
        }else{
            echo "Conexão não processada, verificar arquivo com dados de acesso";
        }

        

        

    ?>

    <p><a href="/desafio-fullstack/index.html">Voltar</p></a><br><br>


</body>
</html>