<?php

require_once 'classes/ar/Produto.php';
require_once 'classes/api/Connection.php';


try 
{
    $conn = Connection::open('estoque');
    Produto::setConnection($conn);

    foreach (Produto::all() as $produto)
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

    $outro = Produto::find(1);

    print "Descrição: {$outro->descricao}<br>";
    print "Magem de lucro: {$outro->getMargemLucro()}<br>";
    $outro->registraCompra(15, 7);
    $outro->save();

}
catch (Exception $e) 
{
    print $e->getMessage();
}