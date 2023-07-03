<?php
require_once("banco.php"); 
class Cadastro{
    private $txtRegistro;
    private $txtNome;
    private $txtTelefone;
    private $txtEmail;
    private $txtSenha;
    private $banco;


    public function __construct() {
        $this->banco = new Banco();
    }
    public function setRegistro($Registro){
        $this->txtRegistro = $Registro;
    }
    public function getRegistro(){
        return $this->txtRegistro;
    }
    public function setNome($Nome){
        $this->txtNome = $Nome;
    }
    public function getNome(){
        return $this->txtNome;
    }
    public function setTelefone($Telefone){
        $this->txtTelefone = $Telefone;
    }
    public function getTelefone(){
        return $this->txtTelefone;
    }
    public function setEmail($Email){
        $this->txtEmail = $Email;
    }
    public function getEmail(){
        return $this->txtEmail;
    }
    public function setSenha($Senha){
        $this->txtSenha = $Senha;
    }
    public function getSenha(){
        return $this->txtSenha;
    }

    public function inserirUsuario($txtRegistro,$txtNome,$txtTelefone,$txtEmail,$txtSenha){
        $sql = $this->banco->getConexao()->prepare("INSERT INTO professores(registro,nome,telefone,email,senha) values($txtRegistro,'$txtNome','$txtTelefone','$txtEmail','$txtSenha')");
        $sql->execute();
    }
}
?>
