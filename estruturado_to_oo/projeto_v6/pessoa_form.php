<?php
require_once './classes/Pessoa.php';
require_once './classes/Cidade.php';

$pessoa = [];
$pessoa['id']        = '';
$pessoa['nome']      = '';
$pessoa['endereco']  = '';
$pessoa['bairro']    = '';
$pessoa['telefone']  = '';
$pessoa['email']     = '';
$pessoa['id_cidade'] = '';

try
{
    if (!empty($_REQUEST['action']) and $_REQUEST['action'] == 'edit')
    {
        if (!empty($_GET['id'])) {
            $id = (int) $_GET['id'];
        
            $pessoa = Pessoa::find($id);
        }
    }
    elseif (!empty($_REQUEST['action']) and $_REQUEST['action'] == 'save')
    {
        $pessoa = $_POST;
        
        Pessoa::save($pessoa);
        
        print "Registro salvo com sucesso!";
    }
}
catch (Exception $e)
{
    print $e->getMessage();
}



require_once 'lista_cidades.php';
$cidades =  lista_combo_cidades($pessoa['id_cidade']);

$cidades = '';

foreach (Cidade::all() as $cidade)
{
    $id = $cidade['id'];
    $nome = $cidade['nome'];
    $check = ($pessoa['id_cidade'] == $id) ? 'selected=1' : '';
    $cidades .= "<option {$check} value='{$id}'>{$nome}</option>";
}


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
