<?php
require_once("banco.php"); 
class Login{
    private $txtEmail;
    private $txtsenha;
   
    private $banco;


    public function __construct() {
       $this->banco = new Banco();
    }

    public function setEmail($Email){
        $this->txtEmail = $Email;
    }
    public function getEmail(){
        return $this->txtEmail;
    }
   
    public function setSenha($Senha){
        $this->txtsenha = $Senha;
    }
    public function getSenha(){
        return $this->txtsenha;
    }
   /* public function validar(){
        if(isset($_POST['submit']) && !empty($txtEmail) && !empty($txtsenha)){
            require_once("banco.php");
            
            $sql = "SELECT FROM professores WHERE email = '$txtEmail' and senha = '$txtsenha'";
            $result = $con->query($sql);
            if(mysqli_num_rows($result) < 1)
            {
                unset($_SESSION['$txtEmail']);
                unset($_SESSION['txtSenha']);
                header('Location: login.html');
            }
            else
            {
                $_SESSION['txtEmail'] = $email;
                $_SESSION['txtSenha'] = $senha;
                header('Location: produtos.html');
            }
        }{
            //nao acessa
           header('Location: login.html');
        }
    }*/
    
}
?>
