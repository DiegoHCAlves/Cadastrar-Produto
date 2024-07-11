<?php
require ("conexao.php");

class ProdutoDAO
{

    public function salvar($produto)
    {
        try {

            $conexao = new Conexao();
            $connection = $conexao->getConnection();


            $nomeProduto = $produto->getNomeProduto();
            $valor = $produto->getValor();


            $stmt = $connection->prepare("INSERT INTO produto (nomeProduto, valor) VALUES (:nomeProduto, :valor)");


            $stmt->bindParam(':nomeProduto', $nomeProduto);
            $stmt->bindParam(':valor', $valor);

            $stmt->execute();
            return "Produto Cadastrado com sucesso.";
        } catch (PDOException $error) {
            return $error->getMessage();
        }
    }

    public function getTodos()
    {
        try {
            $conexao = new Conexao();
            $connection = $conexao->getConnection();
            $sql = "SELECT id, nomeProduto, valor FROM produto";
            $stmt = $connection->prepare($sql);

            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        } catch (PDOException $error) {
            return $error->getMessage();
        }
        

    }

    public function excluir($id)
    {
        try {
            
            $conexao = new Conexao();
            $connection = $conexao->getConnection();
            $sql = "DELETE from produto WHERE id = :id";
            $stmt = $connection->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            return "Produto excluído com sucesso.";
        } catch (PDOException $error) {
            return $error->getMessage();
        }
    }

    public function editar($produto)
    {
        try {
            $conexao = new Conexao();
            $connection = $conexao->getConnection();
            $sql = "UPDATE produto SET  
              nomeProduto = :nomeProduto, 
              valor = :valor WHERE id = :id";
            $stmt = $connection->prepare($sql);
    
            
            $nomeProduto = $produto->getNomeProduto();
            $valor = $produto->getValor();
            $id = $produto->getId();
    
            
            $stmt->bindParam(':nomeProduto', $nomeProduto);
            $stmt->bindParam(':valor', $valor);
            $stmt->bindParam(':id', $id);
            
            $stmt->execute();
    
            return "Usuário editado com sucesso.";
        } catch (PDOException $error) {
            return $error->getMessage();
        }
    }
    
}