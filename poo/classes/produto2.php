<?php

class Produto2 implements OrcavelInterface
{
    private $descricao;
    private $estoque;
    private $preco;
    private $fabricante;
    private $caracteristicas;

    public function __construct($descricao, $estoque, $preco)
    {
        $this->descricao = $descricao;
        $this->estoque = $estoque;
        $this->preco = $preco;
        $this->caracteristicas = [];
    }

    public function addCaracteristica($nome, $valor)
    {
        $this->caracteristicas[] = new Caracteristica($nome, $valor);
    }

    public function getCaracteristicas()
    {
        return $this->caracteristicas;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setFabricante(Fabricante $fabricante)
    {
        $this->fabricante = $fabricante;
    }

    public function getFabricante()
    {
        return $this->fabricante;
    }

    public function setPreco($valor)
    {
        $this->preco = $valor;
    }

    public function getPreco()
    {
        return $this->preco;
    }

}