<?php

class Produto
{
    private $descricao;
    private $estoque;
    private $preco;

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function setEstoque($quantidade)
    {
        if (is_numeric($quantidade) and $quantidade >= 1)
        {
            $this->estoque = $quantidade;
        }
    }

    public function setPreco($preco)
    {
        if (is_numeric($preco) and $preco >= 1)
        {
            $this->preco = $preco;
        }
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function getEstoque()
    {
        return $this->estoque;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function aumentarEstoque($unidades)
    {
        if (is_numeric($unidades) and $unidades >= 0)
        {
            $this->estoque += $unidades;
        }
    }

    public function diminuirEstoque($unidades)
    {
        if (is_numeric($unidades) and $unidades >= 0)
        {
            $this->estoque -= $unidades;
        }
    }

    public function reajustarPreco($percentual) 
    {
        if (is_numeric($percentual) and $percentual >= 0)
        {
            $this->preco += $this->preco * ($percentual / 100);
        }
    }

}

echo '<pre>';
$p1 = new Produto;
$p1->setDescricao('Chocolate');
$p1->setEstoque(10);
$p1->setPreco(7);

var_dump($p1);

$p1->aumentarEstoque(10);
$p1->diminuirEstoque(1);
$p1->reajustarPreco(10);

var_dump($p1);