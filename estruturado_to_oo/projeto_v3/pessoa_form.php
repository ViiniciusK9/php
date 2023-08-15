<?php

$pessoa = [];
$pessoa['id']        = '';
$pessoa['nome']      = '';
$pessoa['endereco']  = '';
$pessoa['bairro']    = '';
$pessoa['telefone']  = '';
$pessoa['email']     = '';
$pessoa['id_cidade'] = '';

if (!empty($_REQUEST['action']) and $_REQUEST['action'] == 'edit')
{
    if (!empty($_GET['id'])) {
        $id = (int) $_GET['id'];
        $conn = pg_connect('host=localhost port=5432 dbname=livro user=postgres password=admin');
        
        $result = pg_query($conn, "SELECT * FROM pessoa WHERE id = '{$id}';");
        
        $pessoa = pg_fetch_assoc($result);
    }
}
elseif (!empty($_REQUEST['action']) and $_REQUEST['action'] == 'save')
{
    $pessoa = $_POST;
    $conn = pg_connect('host=localhost port=5432 dbname=livro user=postgres password=admin');
    if (!empty($pessoa['id']) and is_numeric($pessoa['id'])) {

        $sql = "UPDATE pessoa SET   nome      = '{$pessoa['nome']}', 
                                    endereco  = '{$pessoa['endereco']}', 
                                    bairro    = '{$pessoa['bairro']}', 
                                    telefone  = '{$pessoa['telefone']}', 
                                    email     = '{$pessoa['email']}', 
                                    id_cidade = '{$pessoa['id_cidade']}' WHERE id = {$pessoa['id']};";
    
        $result = pg_query($conn, $sql);
    }
    else 
    {
        $result = pg_query($conn, "SELECT max(id) as next FROM pessoa;");

        $row = pg_fetch_assoc($result);

        $next = (int) $row['next'] + 1;

        $sql = "INSERT INTO pessoa( id, nome, endereco, bairro, telefone, email, id_cidade) 
                            VALUES ('{$next}', 
                                    '{$pessoa['nome']}', 
                                    '{$pessoa['endereco']}', 
                                    '{$pessoa['bairro']}', 
                                    '{$pessoa['telefone']}', 
                                    '{$pessoa['email']}', 
                                    '{$pessoa['id_cidade']}');";

        $result = pg_query($conn, $sql);
    }

    if ($result)
    {
        print "Registro salvo com sucesso!";
    }
    else
    {
        print pg_last_error($conn);
    }

    pg_close($conn);
}



require_once 'lista_cidades.php';
$cidades =  lista_combo_cidades($pessoa['id_cidade']);
   


$form = file_get_contents('./html/form.html');
$form = str_replace('{id}',       $pessoa['id'],       $form);
$form = str_replace('{nome}',     $pessoa['nome'],     $form);
$form = str_replace('{endereco}', $pessoa['endereco'], $form);
$form = str_replace('{bairro}',   $pessoa['bairro'],   $form);
$form = str_replace('{telefone}', $pessoa['telefone'], $form);
$form = str_replace('{email}',    $pessoa['email'],    $form);
$form = str_replace('{cidades}',  $cidades,            $form);

print $form;

?>
