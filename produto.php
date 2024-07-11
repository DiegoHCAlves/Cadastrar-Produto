<?php


class Produto
{
    private $id;
    private $nomeProduto;
    private $valor;


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }


    public function getNomeProduto()
    {
        return $this->nomeProduto;
    }


    public function setNomeProduto($nomeProduto)
    {
        $this->nomeProduto = $nomeProduto;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }
}

