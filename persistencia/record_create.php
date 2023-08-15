<?php

require_once 'classes/api/Transaction.php';
require_once 'classes/api/Connection.php';
require_once 'classes/api/Logger.php';
require_once 'classes/api/LoggerTXT.php';
require_once 'classes/api/Record.php';
require_once 'classes/model/Produto.php';

try 
{
    Transaction::open('estoque');
    Transaction::setLogger(new LoggerTXT('tmp/log_novo.txt'));

    $p1 = new Produto;
    $p1->descricao = 'Mouse';
    $p1->estoque = 10;
    $p1->preco_custo = 50;
    $p1->preco_venda = 120;
    $p1->codigo_barras = '1719028347';
    $p1->data_cadastro = date('Y-m-d');
    $p1->origem = 'E';
    $p1->store();


    Transaction::close();
}
catch (Exception $e) 
{
    Transaction::rollback();
    print $e->getMessage();
}