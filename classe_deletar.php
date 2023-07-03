<?php
    require_once("banco.php");
    class Deletar{
        private $banco;
        public function __construct(){
            $this->banco = new Banco();
        }
            
           
        public function deletarUsuario($id){
            $sql = $this->banco->getConexao()->prepare("DELETE FROM professores WHERE id = $id");
            $sql->execute();
            echo "Usuário excluído com sucesso";
        }

        public function deletarProdutos($id){
            $sql = $this->banco->getConexao()->prepare("DELETE FROM produtos WHERE id = $id");
            $sql->execute();
            echo "Produto excluído com sucesso";
        }

        public function deletarProdutosEntrada($id){
            $sql = $this->banco->getConexao()->prepare("DELETE FROM produtos_entrada WHERE id = $id");
            $sql->execute();
            echo "Produto de entrada excluído com sucesso";
        }
    
        public function deletarProdutosSaída($id){
            $sql = $this->banco->getConexao()->prepare("DELETE FROM produtos_saida WHERE id = $id");
            $sql->execute();
            echo "Produto de saída excluído com sucesso";
        }

        public function deletarEntradaNotaFiscal($id){
            $sql = $this->banco->getConexao()->prepare("DELETE FROM entrada_nf WHERE id = $id");
            $sql->execute();
            echo "Nota fiscal excluída com sucesso";
        }

        public function deletarReagentes($id){
            $sql = $this->banco->getConexao()->prepare("DELETE FROM reagentes WHERE id = $id");
            $sql->execute();
            echo " Reagente excluído com sucesso";
        }
        
        public function deletarSaída($id){
            $sql = $this->banco->getConexao()->prepare("DELETE FROM saida WHERE id = $id");
            $sql->execute();
            echo "Saída excluída com sucesso";
        }
    
        public function deletarFornecedores($id){
            $sql = $this->banco->getConexao()->prepare("DELETE FROM fornecedor WHERE id = $id");
            $sql->execute();
            echo "Fornecedor excluído com sucesso";
        }
    
    
    
    }


?>