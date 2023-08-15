<?php

// carrega as classes necessárias
require_once 'classes/api/Transaction.php';
require_once 'classes/api/Connection.php';
require_once 'classes/api/Criteria.php';
require_once 'classes/api/Repository.php';
require_once 'classes/api/Record.php';
require_once 'classes/api/Logger.php';
require_once 'classes/api/LoggerTXT.php';
require_once 'classes/model/Produto.php';

try
{
    Transaction::open('estoque');
    Transaction::setLogger(new LoggerTXT('tmp/log_collection_get.txt'));

    $criteria = new Criteria;

    $criteria->add('estoque', '>', 10);
    $criteria->add('origem', '=', 'N');

    $repository = new Repository('Produto');
    $produtos = $repository->load($criteria);

    foreach ($produtos as $produto)
    {
        print "Id: {$produto->id}<br>";
        print "Descricao: {$produto->descricao}<br>";
        print "Estoque: {$produto->estoque}<br>";
        print "Origem: {$produto->origem}<br><br>";
    }

    print "Quantidade: {$repository->count($criteria)}";

    Transaction::close();
}
catch (Exception $e)
{
    Transaction::rollback();
    print $e->getMessage();
}