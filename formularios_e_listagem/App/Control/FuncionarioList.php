<?php

use Livro\Control\Page;
use Livro\Control\Action;
use Livro\Widgets\Datagrid\Datagrid;
use Livro\Widgets\Datagrid\DatagridColumn;
use Livro\Widgets\Dialog\Message;
use Livro\Widgets\Wrapper\DatagridWrapper;
use Livro\Widgets\Dialog\Question;
use Livro\Database\Transaction;
use Livro\Database\Criteria;
use Livro\Database\Repository;

class FuncionarioList extends Page
{
    private $datagrid;
    public function __construct()
    {
        parent::__construct();
    
        $this->datagrid = new DatagridWrapper( new Datagrid );

        $codigo = new DatagridColumn('id', 'Código', 'right', '10%');
        $nome = new DatagridColumn('nome', 'Nome', 'left', '30%');
        $endereco = new DatagridColumn('endereco', 'Endereço', 'left', '30%');
        $email = new DatagridColumn('email', 'Email', 'left', '30%');

        $this->datagrid->addColumn($codigo);
        $this->datagrid->addColumn($nome);
        $this->datagrid->addColumn($endereco);
        $this->datagrid->addColumn($email);

        $this->datagrid->addAction('Editar', new Action([new FuncionarioForm, 'onEdit']), 'id');
        $this->datagrid->addAction('Deletar', new Action([$this, 'onDelete']), 'id');

        parent::add($this->datagrid);    
    }

    public function onReload()
    {
        try 
        {
            Transaction::open('livro');

            $repository = new Repository('Funcionario');
            
            $criteria = new Criteria;
            $criteria->setProperty('order', 'id');

            $funcionarios = $repository->load($criteria);

            $this->datagrid->clear();

            if ($funcionarios) 
            {
                foreach ($funcionarios as $funcionario)
                {
                    $this->datagrid->addItem($funcionario);
                }
            }

            Transaction::close();
        } 
        catch (Exception $e) 
        {
            new Message('error', $e->getMessage());
        }
    }

    public function onDelete($param)
    {
        $action = new Action([$this, 'delete']);
        $action->setParameter('id', $param['id']);
        new Question('Deseja realmente excluir o registro?', $action);
    }

    public function delete($param)
    {
        try 
        {
            Transaction::open('livro');

            $funcionario = Funcionario::find($param['id']);

            if ($funcionario) 
            {
                $funcionario->delete();
            }

            Transaction::close();
            
            $this->onReload();

            new Message('info', 'Registro excluído com sucesso');
        } 
        catch (Exception $e) 
        {
            new Message('error', $e->getMessage());
        }
    }

    public function show()
    {
        $this->onReload();
        parent::show();
    }

}