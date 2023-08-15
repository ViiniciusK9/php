<?php

require_once './classes/tdg/ProdutoGateway.php';

try
{
    $conn = new PDO('sqlite:database/estoque.db');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    ProdutoGateway::setConnection($conn);

    /* insert
    $data = new stdClass;
    $data->descricao = 'Vinho';
    $data->estoque = 10;
    $data->preco_custo = 10;
    $data->preco_venda = 20;
    $data->codigo_barras = '123674895';
    $data->data_cadastro = date('Y-m-d');
    $data->origem = 'N';
    
    $gw = new ProdutoGateway();
    $gw->save($data);
    */

    /* find and update
    $gw = new ProdutoGateway();
    $p1 = $gw->find(1);
    $p1->estoque +=2;
    $gw->save($p1);
    */

    // list
    $gw = new ProdutoGateway();
    foreach ($gw->all() as $produto)
    {
        print "Descricao: {$produto->descricao}<br>";
    }
    
}
catch (Exception $e)
{
    print $e->getMessage();
}