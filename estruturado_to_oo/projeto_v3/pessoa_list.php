<?php
$conn = pg_connect('host=localhost port=5432 dbname=livro user=postgres password=admin');


if (!empty($_GET['action']) and $_GET['action'] == 'delete' and !empty($_GET['id']))
{
    $id = (int) $_GET['id'];
    
    $sql = "DELETE FROM pessoa WHERE id = '{$id}';";
    
    $result = pg_query($conn, $sql);
}

$result = pg_query($conn, "SELECT * FROM pessoa ORDER BY id;");

$itens = '';

while ($row = pg_fetch_assoc($result))
{
    $item = file_get_contents('./html/item.html');
    $item = str_replace('{id}',       $row['id'],       $item);
    $item = str_replace('{nome}',     $row['nome'],     $item);
    $item = str_replace('{endereco}', $row['endereco'], $item);
    $item = str_replace('{bairro}',   $row['bairro'],   $item);
    $item = str_replace('{telefone}', $row['telefone'], $item);

    $itens .= $item;
}

pg_close($conn);

$list = file_get_contents('html/list.html');

$list = str_replace('{itens}', $itens, $list);

print $list;

?>
