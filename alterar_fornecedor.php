<?php
require_once('banco.php');

if(!empty($_POST['txtCodFornecedor']))
    {
        $id = $_POST['txtCodFornecedor'];
        $sqlSelect = "SELECT * FROM fornecedor WHERE cod_fornecedor = $id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['txtNome'];
                $telefone = $user_data['txtTelefone'];
                $email = $user_data['txtEmail'];
                $senha = $user_data['txtSenha'];
                
            }
        }
        else
        {
            header('Location: controleFornecedor.php');
        }
    }
    else
    {
        header('Location: controleFornecedor.php');
    }





?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <script src="https://kit.fontawesome.com" crossorigin="anonymous"></script>
    <title>Alterar Fornecedor</title>
</head>
<body>
<div id="form">
        <form action="controleFornecedor.php" method="post">
            <h1 class="title">Alterar Fornecedor </h1>
            <label for="codigoFornecedor">Código fornecedor</label>
            <div class="input">
                <i class="fa-sharp fa-light fa-circle-user" aria-hidden="true"></i>
                <input id="txtCodFornecedor" name="txtCodFornecedor" placeholder="Código do fornecedor" type="text">
            </div>
            <label for="username">Nome Completo</label>
            <div class="input">
                <i class="fa-sharp fa-light fa-circle-user" aria-hidden="true"></i>
                <input id="txtNome" name="txtNome" placeholder="Nome completo" type="text">
            </div>
            <label for="telefone">Telefone </label>
            <div class="input">
                <input id="txtTelefone" name="txtTelefone" placeholder="Telefone" type="tel">
            </div>
            <label for="email">Email</label>
            <div class="input">
                <input id="txtEmail" name="txtEmail" placeholder="Email" type="email">
            </div>
            <label for="Senha">Senha</label>
            <div class="input">
                <input id="txtSenha" name="txtSenha" placeholder="Senha" type="password">
            </div>
            <div id="btn">
                <button type="submit">Alterar</button>
            </div>
        </form>
    </div>
</body>
</html>