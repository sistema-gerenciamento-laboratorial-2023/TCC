<?php
    include "cadastroFornecedor.php";
    $cod_fornecedor = $_POST["txtCodFornecedor"];
    $nome = $_POST["txtNome"];
    $telefone = $_POST["txtTelefone"];
    $email = $_POST["txtEmail"];
    $senha = $_POST["txtSenha"];
    
    $Fornecedor = new Fornecedor();
    $Fornecedor->setCodFornecedor(strip_tags($cod_fornecedor));
    $Fornecedor->setNome(strip_tags($nome));
    $Fornecedor->setTelefone(strip_tags($telefone));
    $Fornecedor->setEmail(strip_tags($email));
    $Fornecedor->setSenha(strip_tags($senha));
    $inserirFornecedor = $Fornecedor->inserirFornecedor($cod_fornecedor,$nome,$telefone,$email,$senha);
?>