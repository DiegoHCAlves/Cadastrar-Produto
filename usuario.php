<?php


class Usuario
{
    private $id;
    private $nomeCompleto;
    private $apelido;

    private $senha;

    public function getId() {
        return $this->id;
    }

    public function getNomeCompleto() {
        return $this->nomeCompleto;
    }

    public function getApelido() {
        return $this->apelido;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNomeCompleto($nomeCompleto) {
        $this->nomeCompleto = $nomeCompleto;
    }

    public function setApelido($apelido) {
        $this->apelido = $apelido;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    
}
