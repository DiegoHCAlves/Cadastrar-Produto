Produtoproduto<?php
require("produto.php");
require("produto_dao.php");
session_start();



if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['method'])) {

    $method = $_GET['method'];
    if (method_exists('ProdutoController', $method)) {
        $produtoController = new ProdutoController();
        $produtoController->$method($_GET);
    } else {
        echo 'Metodo incorreto';
    }
} else if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['method'])) {
    $method = $_POST['method'];
    if (method_exists('ProdutoController', $method)) {
        var_dump($method);
        $produtoController = new ProdutoController();
        $produtoController->$method($_POST);
    } else {
        echo 'Metodo incorreto';
    }
}

class ProdutoController {
    public function index() {
        $_SESSION['msg'] = "";
        header('location: index.php');
    }

    public function cadastrar_produto() {
        $_SESSION['msg'] = "";
        header('location: cadastrar_produto.php'); 
    }

    public function consultar_produto() {
        $_SESSION['msg'] = "";
        header('location: consultar_produto.php'); 
    }

    public function editar_produto() {
        $_SESSION['msg'] = "";
        header('location: editar_produto.php');
    }

    public function excluir_produto() {
        $_SESSION['msg'] = "";
        header('location: excluir_produto.php');
    }

    public function salvar() {
        
        $nomeProduto = filter_input(INPUT_POST, 'nomeProduto');
        $valor = filter_input(INPUT_POST, 'valor');

        $produto  = new Produto();
        $produto->setNomeProduto($nomeProduto);
        $produto->setValor($valor);

        $produtoDAO = new ProdutoDAO();
        $msg = $produtoDAO->salvar($produto);
        $_SESSION['msg'] = $msg;
        header("location: index.php");
    }

    public function excluir()
    {
        $id = filter_input(INPUT_GET, 'id');
        $produto  = new Produto();
        $produto->setId($id);

        $produtoDao = new ProdutoDAO();
        $msg = $produtoDao->excluir($id);
        $_SESSION['msg'] = $msg;
        header('location: excluir_produto.php');
    }

    public function editar()
    {   
        $id = $_GET['id'];
        $nomeProduto = $_GET['nomeProduto'];
        $valor = $_GET['valor'];

        $produto = new Produto();
        $produto->setId($id);
        $produto->setNomeProduto($nomeProduto);
        $produto->setValor($valor);

        $produtoDAO = new ProdutoDAO();
        $msg = $produtoDAO->editar($produto);
        $_SESSION['msg'] = $msg;
        header('location: editar_produto.php');
    }
    

    public function getTodos()
    {
        $produtoDAO = new ProdutoDAO();
        return $produtoDAO->getTodos();
    }
}