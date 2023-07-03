<?php
    include "login.php";
    $email = $_POST["txtEmail"];
    $senha = $_POST["txtSenha"];
    $Login = new Login();
    $Login->setEmail(strip_tags($email));
    $Login->setSenha(strip_tags($senha));
    //$Login->validar();
    
?>