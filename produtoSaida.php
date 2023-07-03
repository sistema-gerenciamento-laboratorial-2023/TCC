<?php
require_once("banco.php"); 
class Psaida{
    private $cod_saida;
    private $cas;
    private $quantidade;
    private $unidade;
    private $banco;

    public function __construct() {
        $this->banco = new Banco();
    }
    public function setNumSaida($num_saida){
        $this->cod_saida = $num_saida;
    }
    public function getNumSaida(){
        return $this->cod_saida;
    }
    public function setCas($Cas){
        $this->cas = $Cas;
    }
    public function getCas(){
        return $this->cas;
    }
    public function setQuantidade($quant){
        $this->quantidade = $quant;
    }
    public function getQuantidade(){
        return $this->quantidade;
    }
    public function setUnidade($unidade){
        $this->unidade = $unidade;
    }
    public function getUnidade(){
        return $this->unidade;
    }

    public function inserirSaidaProdutos($cod_saida,$cas,$quantidade,$unidade){
        $sql = $this->banco->getConexao()->prepare("INSERT INTO produtos_saida(num_saida,cas,quantidade,unidade) values($cod_saida,'$cas',$quantidade,'$unidade')");
        $sql->execute();
    }
}
?>
