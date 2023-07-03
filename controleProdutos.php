<?php
    include "produtos.php";
    $cas = $_POST["txtCas"];
    $onu = $_POST["txtOnu"];
    $produto = $_POST["txtProduto"];
    $sinonimo = $_POST["txtSinonimo"];
    $formula = $_POST["txtFormula"];
    $caracteristica = $_POST["txtCaracteristica"];
    $fogo = $_POST["txtFogo"];
    $explosao = $_POST["txtExplosao"];
    $incompativel = $_POST["txtIncompativel"];
    $danos = $_POST["txtDanos"];
    $armazenagem = $_POST["txtArmazenagem"];
    $manuseio = $_POST["txtManuseio"];
    $derrame = $_POST["txtDerrame"];
    $descarte = $_POST["txtDescarte"];
    $rotulagem = $_POST["txtRotulagem"];
    $informacoes = $_POST["txtInformacoes"];
    $Eminimo = $_POST["txtEminimo"]; 
    $Eatual = $_POST["txtEatual"];
    $Emaximo = $_POST["txtEmaximo"];
    $reagente = $_POST["txtReagente"];


    $Produtos = new Produtos();
    $Produtos->setCas(strip_tags($cas));
    $Produtos->setOnu(strip_tags($onu));
    $Produtos->setProduto(strip_tags($produto));
    $Produtos->setSinonimo(strip_tags($sinonimo));
    $Produtos->setFormula(strip_tags($formula));
    $Produtos->setCaracteristica(strip_tags($caracteristica));
    $Produtos->setFogo(strip_tags($fogo));
    $Produtos->setExplosao(strip_tags($explosao));
    $Produtos->setIncompativel(strip_tags($incompativel));
    $Produtos->setDanos(strip_tags($danos));
    $Produtos->setArmazenagem(strip_tags($armazenagem));
    $Produtos->setManuseio(strip_tags($manuseio));
    $Produtos->setDerrame(strip_tags($derrame));
    $Produtos->setDescarte(strip_tags($descarte));
    $Produtos->setRotulagem(strip_tags($rotulagem));
    $Produtos->setInformacoes(strip_tags($informacoes));
    $Produtos->setEminimo(strip_tags($Eminimo));
    $Produtos->setEatual(strip_tags($Eatual));
    $Produtos->setEmaximo(strip_tags($Emaximo));
    $Produtos->setReagente(strip_tags($reagente));
    
    $inserirProduto = $Produtos->inserirProduto($cas,$onu,$produto,$sinonimo,$formula,$caracteristica,$fogo,$explosao,$incompativel,$danos,$armazenagem,$manuseio,$derrame,$descarte,$rotulagem,$informacoes,$Eminimo,$Eatual,$Emaximo,$reagente);
?>