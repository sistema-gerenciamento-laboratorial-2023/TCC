<?php
require_once("banco.php"); 
class Fornecedor{
    private $codigoFornecedor;
    private $nome;
    private $telefone;
    private $email;
    private $senha;
    private $banco;



    public function __construct() {
        $this->banco = new Banco();
    }

    public function setCodFornecedor($codigoF){
        $this->codigoFornecedor = $codigoF;
    }
    public function getCodFornecedor(){
        return $this->codigoFornecedor;
    }
    public function setNome($Nome){
        $this->nome = $Nome;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setTelefone($Telefone){
        $this->telefone = $Telefone;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function setEmail($Email){
        $this->email = $Email;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setSenha($Senha){
        $this->senha = $Senha;
    }
    public function getSenha(){
        return $this->senha;
    }   

    public function inserirFornecedor($codigoFornecedor,$nome,$telefone,$email,$senha){

        $sql = $this->banco->getConexao()->prepare("INSERT INTO fornecedor(cod_fornecedor,nome,telefone,email,senha) VALUES ($codigoFornecedor,'$nome','$telefone','$email','$senha') ");
        $sql->execute();
    }

    public function alterarFornecedor($codigoF,$Nome,$Telefone,$Email,$Senha){
        $sql = $this->banco->getConexao()->prepare("UPDATE fornecedor SET cod_fornecedor =  $_POST['txtCodFornecedor']");
        $sql->execute();
    }
}
?>