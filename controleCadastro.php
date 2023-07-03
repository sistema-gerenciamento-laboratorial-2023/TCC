<?php
    include "cadastro.php";
    $registro = $_POST['txtRegistro'];
    $nome = $_POST["txtNome"];
    $telefone = $_POST["txtTelefone"];
    $email = $_POST["txtEmail"];
    $senha = $_POST["txtSenha"];

    $Cadastro = new Cadastro();
    $Cadastro->setRegistro(strip_tags($registro));
    $Cadastro->setNome(strip_tags($nome));
    $Cadastro->setTelefone(strip_tags($telefone));
    $Cadastro->setEmail(strip_tags($email));
    $Cadastro->setSenha(strip_tags($senha));
    $inserirUsuario = $Cadastro->inserirUsuario($registro,$nome,$telefone,$email,$senha);
?>
