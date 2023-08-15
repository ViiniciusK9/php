<?php

require_once './db/pessoa_db.php';

if (!empty($_GET['action']) and $_GET['action'] == 'delete' and !empty($_GET['id']))
{
    delete_people((int)$_GET['id']);
}

$peoples = list_peoples();

$itens = '';

if ($peoples) 
{
    foreach ($peoples as $people)
    {
        $item = file_get_contents('./html/item.html');
        $item = str_replace('{id}',       $people['id'],       $item);
        $item = str_replace('{nome}',     $people['nome'],     $item);
        $item = str_replace('{endereco}', $people['endereco'], $item);
        $item = str_replace('{bairro}',   $people['bairro'],   $item);
        $item = str_replace('{telefone}', $people['telefone'], $item);
        
        $itens .= $item;
    }
}

$list = file_get_contents('html/list.html');

$list = str_replace('{itens}', $itens, $list);

print $list;

?>
