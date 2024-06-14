<?php
require("usuario.php");
require("usuario_dao.php");
session_start();



if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['method'])) {

    $method = $_GET['method'];
    if (method_exists('UsuarioController', $method)) {
        $usuarioController = new UsuarioController();
        $usuarioController->$method($_GET);
    } else {
        echo 'Metodo incorreto';
    }
} else if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['method'])) {
    $method = $_POST['method'];
    if (method_exists('UsuarioController', $method)) {
        var_dump($method);
        $usuarioController = new UsuarioController();
        $usuarioController->$method($_POST);
    } else {
        echo 'Metodo incorreto';
    }
}

class UsuarioController {
    public function index() {
        $_SESSION['msg'] = "";
        header('location: index.php');
    }

    public function cadastrar_usuario() {
        $_SESSION['msg'] = "";
        header('location: cadastrar_usuario.php'); 
    }

    public function consultar_usuario() {
        $_SESSION['msg'] = "";
        header('location: consultar_usuario.php'); 
    }

    public function editar_usuario() {
        $_SESSION['msg'] = "";
        header('location: editar_usuario.php');
    }

    public function excluir_usuario() {
        $_SESSION['msg'] = "";
        header('location: excluir_usuario.php');
    }

    public function salvar() {
        
        $nomeCompleto = filter_input(INPUT_POST, 'nomeCompleto');
        $apelido = filter_input(INPUT_POST, 'apelido');
        $senha = filter_input(INPUT_POST, 'senha');

        $usuario  = new Usuario();
        $usuario->setNomeCompleto($nomeCompleto);
        $usuario->setApelido($apelido);
        $usuario->setSenha($senha);

        $usuarioDAO = new UsuarioDAO();
        $msg = $usuarioDAO->salvar($usuario);
        $_SESSION['msg'] = $msg;
        header("location: index.php");
    }

    public function getTodos()
    {
        $usuarioDAO = new UsuarioDAO();
        return $usuarioDAO->getTodos();
    }
}