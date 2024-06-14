<?php
require ("conexao.php");

class UsuarioDAO
{

    public function salvar($usuario)
    {
        try {

            $conexao = new Conexao();
            $connection = $conexao->getConnection();


            $nomeCompleto = $usuario->getNomeCompleto();
            $apelido = $usuario->getApelido();
            $senha = $usuario->getSenha();


            $stmt = $connection->prepare("INSERT INTO usuario (nome_completo, apelido, senha) VALUES (:nomeCompleto, :apelido, :senha)");


            $stmt->bindParam(':nomeCompleto', $nomeCompleto);
            $stmt->bindParam(':apelido', $apelido);
            $stmt->bindParam(':senha', $senha);

            $stmt->execute();
            return "Usuario Cadastrado com sucesso.";
        } catch (PDOException $error) {
            return $error->getMessage();
        }
    }

    public function getTodos()
    {
        try {
            $conexao = new Conexao();
            $connection = $conexao->getConnection();
            $sql = "SELECT id, nome_completo, apelido FROM usuario";
            $stmt = $connection->prepare($sql);

            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        } catch (PDOException $error) {
            return $error->getMessage();
        }
        

    }
}