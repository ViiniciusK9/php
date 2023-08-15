<?php

require_once './db/pessoa_db.php';

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
        
        $pessoa = get_people($id);
    }
}
elseif (!empty($_REQUEST['action']) and $_REQUEST['action'] == 'save')
{
    
    $pessoa = $_POST;
    if (!empty($pessoa['id']) and is_numeric($pessoa['id'])) {

        $result = update_people($pessoa);
    }
    else 
    {
        $pessoa['id'] = get_next_id();
        $result = insert_people($pessoa);
    }

    if ($result)
    {
        print "Registro salvo com sucesso!";
    }
    else
    {
        print "ERRO!";
    }
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
