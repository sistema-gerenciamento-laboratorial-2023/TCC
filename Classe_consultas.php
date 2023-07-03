<?php
require_once("banco.php");
class Classe_consultas{
     private $banco;
     public function __construct(){
         $this->banco = new banco();
        
    }
    public function consultaUsuarios ()
    {
         //comando do banco de dados para puxar todos os fornecedores cadastrados 
         $sql = $this->banco->getConexao()->prepare("SELECT * from professores ");
         $sql->execute();
         $retornoDadosBanco = $sql -> get_result();      
         $usuarios = array();
         while($temp = $retornoDadosBanco -> fetch_array()){
               $usuarios[] = $temp;
         }
         return $usuarios;
      
    }
   
    public function consultarprodutos(){
          $sql = $this->banco->getConexao()->prepare("SELECT * from produtos ");
          $sql->execute();
          $retornoDadosBanco = $sql -> get_result();
          $produtos = array();
          while($temp = $retornoDadosBanco -> fetch_array()){
               $produtos[] = $temp;
          }
          return $produtos;

    }
     public function consultarProdutosEntrada(){
          $sql = $this->banco->getConexao()->prepare("SELECT * FROM produtos_entrada ");
          $sql->execute();
          $retornoDadosBanco = $sql ->get_result();
          $produtos_entrada = array();
          while($temp = $retornoDadosBanco -> fetch_array()){
               $produtos_entrada[] = $temp;
          }
          return $produtos_entrada;
     }

     public function consultarSaidasProdutos(){
          $sql =  $this->banco->getConexao()->prepare("SELECT * FROM produtos_saida");
          $sql->execute();
          $retornoDadosBanco = $sql -> get_result();
          $produtos_saida = array();
          while($temp = $retornoDadosBanco -> fetch_array()){
               $produtos_saida[] = $temp;
          }
          return $produtos_saida;
     }
     
     public function consultarEntradaNotaFiscal(){
          $sql =  $this->banco->getConexao()->prepare("SELECT * FROM entrada_nf ");
          $sql->execute();
          $retornoDadosBanco = $sql -> get_result();
          $entrada_nf = array();
          while($temp = $retornoDadosBanco -> fetch_array()){
               $entrada_nf[] = $temp;
          }
          return $entrada_nf;

     }

     public function consultarReagentes(){
          $sql =  $this->banco->getConexao()->prepare("SELECT * FROM reagentes ");
          $sql->execute();
          $retornoDadosBanco = $sql -> get_result();
          $reagentes = array();
          while($temp = $retornoDadosBanco -> fetch_array()){
               $reagentes[] = $temp;
          }
          return $reagentes;
     }

     public function consultarSaida(){
          $sql =  $this->banco->getConexao()->prepare("SELECT * FROM saida");
          $sql->execute();
          $retornoDadosBanco = $sql -> get_result();
          $saida = array();
          while($temp = $retornoDadosBanco -> fetch_array()){
               $saida[] = $temp;
          }
          return $saida;

     }

     public function consultarFornecedores(){
          $sql =  $this->banco->getConexao()->prepare("SELECT * FROM fornecedor");
          $sql->execute();
          $retornoDadosBanco = $sql -> get_result();
          $fornecedor = array();
          while($temp = $retornoDadosBanco -> fetch_array()){
               $fornecedor[] = $temp;
          }
          return $fornecedor;

     }

}   
?>
