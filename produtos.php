<?php
require_once("banco.php"); 
class Produtos{
    private $txtCas;
    private $txtOnu;
    private $txtProduto;
    private $txtSinonimo;
    private $txtFormula;
    private $txtCaracteristica;
    private $txtFogo;
    private $txtExplosao;
    private $txtIncompativel;
    private $txtDanos;
    private $txtArmazenagem;
    private $txtManuseio;
    private $txtDerrame;
    private $txtDescarte;
    private $txtRotulagem;
    private $txtInformacoes;
    private $txtEminimo;
    private $txtEatual;
    private $txtEmaximo;
    private $txtReagente;

    private $banco;


    public function __construct() {
        $this->banco = new Banco();
    }
    // sets
    public function setCas($cas){
        $this->txtCas = $cas;
    }
    public function setOnu($onu){
        $this->txtOnu = $onu;
    }
    public function setProduto($produto){
        $this->txtProduto = $produto;
    }
    public function setSinonimo($sinonimo){
        $this->txtSinonimo = $sinonimo;
    }
    public function setFormula($formula){
        $this->txtFormula = $formula;
    } 
    public function setCaracteristica($caracteristica){
        $this->txtCaracteristica = $caracteristica;
    }
    public function setFogo($fogo){
        $this->txtFogo = $fogo;
    }
    public function setExplosao($explosao){
        $this->txtExplosao = $explosao;
    }
    public function setIncompativel($incompativel){
        $this->txtIncompativel = $incompativel;
    }
    public function setDanos($danos){
        $this->txtDanos = $danos;
    }
    public function setArmazenagem($armazenagem){
        $this->txtArmazenagem = $armazenagem;
    }
    public function setManuseio($manuseio){
        $this->txtManuseio = $manuseio;
    }
    public function setDerrame($derrame){
        $this->txtDerrame = $derrame;
    }
    public function setDescarte($descarte){
        $this->txtDescarte = $descarte;
    }
    public function setRotulagem($rotulagem){
        $this->txtRotulagem = $rotulagem;
    } 
    public function setInformacoes($informacoes){
        $this->txtInformacoes = $informacoes;
    }
    public function setEminimo($Eminimo){
        $this->txtEminimo = $Eminimo;
    }
    public function setEatual($Eatual){
        $this->txtEatual = $Eatual;
    }
    public function setEmaximo($Emaximo){
        $this->txtEmaximo = $Emaximo;
    }
    public function setReagente($reagente){
        $this->txtReagente = $reagente;
    }

    //gets
    public function getCas(){
        return $this->txtCas;
    }
   
    public function getOnu(){
        return $this->txtOnu;
    }
   
    public function getProduto(){
        return $this->txtProduto;
    }
   
    public function getSinonimo(){
        return $this->txtSinonimo;
    }
   
    public function getFormula(){
        return $this->txtFormula;
    }
   
    public function getCaracteristica(){
        return $this->txtCaracteristica;
    }
   
    public function getFogo(){
        return $this->txtFogo;
    }
   
    public function getExplosao(){
        return $this->txtExplosao;
    }
   
    public function getIncompativel(){
        return $this->txtIncompativel;
    }
   
    public function getDanos(){
        return $this->txtDanos;
    }
    public function getArmazenagem(){
        return $this->txtArmazenagem;
    }
   
    public function getManuseio(){
        return $this->txtManuseio;
    }
   
    public function getDerrame(){
        return $this->txtDerrame;
    }
   
    public function getDescarte(){
        return $this->txtDescarte;
    }
   
    public function getRotulagem(){
        return $this->txtRotulagem;
    }
   
    public function getInformacoes(){
        return $this->txtInformacoes;
    }
   
    public function getEminimo(){
        return $this->txtEminimo;
    }
   
    public function getEatual(){
        return $this->txtEatual;
    }
   
    public function getEmaximo(){
        return $this->txtEmaximo;
    }
   
    public function getReagente(){
        return $this->txtReagente;
    }

    public function inserirProduto($txtCas,$txtOnu,$txtProduto,$txtSinonimo,$txtFormula,$txtCaracteristica,$txtFogo,$txtExplosao,$txtIncompativel,$txtDanos,$txtArmazenagem,$txtManuseio,$txtDerrame,$txtDescarte,$txtRotulagem,$txtInformacoes,$txtEminimo,$txtEatual,$txtEmaximo,$txtReagente){
        $sql = $this->banco->getConexao()->prepare("INSERT INTO produtos(cas,onu,nome_produto,sinonimo,formula,caracteristicas,perigo_fogo,perigo_explosao,reacoes_perigosas_incompatibilidade,danos_ao_ambiente,armazenagem, manuseio,derrame_acidental,descarte,rotulagem,informacoes_adicionais,estoque_minimo,estoque_atual,estoque_maximo,codigo_reagente) values('$txtCas','$txtOnu','$txtProduto','$txtSinonimo','$txtFormula','$txtCaracteristica','$txtFogo','$txtExplosao','$txtIncompativel','$txtDanos','$txtArmazenagem','$txtManuseio','$txtDerrame','$txtDescarte','$txtRotulagem','$txtInformacoes','$txtEminimo','$txtEatual','$txtEmaximo','$txtReagente')");
        $sql->execute();
        echo "Inserido com sucesso!";
    }
}
?>