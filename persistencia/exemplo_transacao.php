<?php

require_once 'classes/ar/ProdutoComTransacao.php';
require_once 'classes/api/Connection.php';
require_once 'classes/api/Transaction.php';


try 
{
    Transaction::open('estoque');

    $produto = new ProdutoComTransacao;

    $produto->descricao = 'Manteiga';
    $produto->estoque = 120;
    $produto->preco_custo = 5;
    $produto->preco_venda = 7;
    $produto->codigo_barras = '123674895';
    $produto->data_cadastro = date('Y-m-d');
    $produto->origem = 'N';
    $produto->save();

    Transaction::close();
}
catch (Exception $e) 
{
    Transaction::rollback();
    print $e->getMessage();
}