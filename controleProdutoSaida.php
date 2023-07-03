<?php
    include "produtoSaida.php";
    $cod_saida = $_POST['txtSaida'];
    $cas = $_POST['txtCas'];
    $quantidade = $_POST["txtQuantidade"];
    $unidade = $_POST["txtUnidade"];

    $Psaida = new Psaida();
    $Psaida->setNumSaida(strip_tags($cod_saida));
    $Psaida->setCas(strip_tags($cas));
    $Psaida->setQuantidade(strip_tags($quantidade));
    $Psaida->setUnidade(strip_tags($unidade));
   
    $inserirSaidaProdutos = $Psaida->inserirSaidaProdutos($cod_saida,$cas,$quantidade,$unidade);
?>