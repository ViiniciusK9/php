<?php

require_once './classes/ar/ProdutoComTransacaoELog.php';
require_once './classes/api/Connection.php';
require_once './classes/api/Transaction.php';
require_once './classes/api/Logger.php';
require_once './classes/api/LoggerTXT.php';


try 
{
    Transaction::open('estoque');
    Transaction::setLogger(new LoggerTXT('./tmp/log.txt'));



    $produto = new ProdutoComTransacaoELog;

    $produto->descricao = 'Chocolate';
    $produto->estoque = 2;
    $produto->preco_custo = 15;
    $produto->preco_venda = 34;
    $produto->codigo_barras = '2364785';
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