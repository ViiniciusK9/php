<?php

require_once './classes/Produto.php';
require_once './classes/tdg/ProdutoGateway.php';

try
{
    $conn = new PDO('sqlite:database/estoque.db');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    Produto::setConnection($conn);

    $produtos = Produto::all();

    foreach ($produtos as $produto)
    {
        $produto->delete();
    }

    $produto = new Produto;

    $produto->descricao = 'Vinho';
    $produto->estoque = 10;
    $produto->preco_custo = 10;
    $produto->preco_venda = 20;
    $produto->codigo_barras = '123674895';
    $produto->data_cadastro = date('Y-m-d');
    $produto->origem = 'N';
    $produto->save();


    $produtos = Produto::all();

    foreach ($produtos as $produto)
    {
        print "Descricao: {$produto->descricao}<br>";
        print "Magem de lucro: {$produto->getMargemLucro()}<br>";
        $produto->registraCompra(15, 7);
        $produto->save();
    }

}
catch (Exception $e)
{
    print $e->getMessage();
}