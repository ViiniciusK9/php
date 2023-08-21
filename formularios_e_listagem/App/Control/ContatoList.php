<?php

use Livro\Control\Action;
use Livro\Control\Page;
use Livro\Widgets\Datagrid\Datagrid;
use Livro\Widgets\Datagrid\DatagridColumn;
use Livro\Widgets\Dialog\Message;
use Livro\Widgets\Wrapper\DatagridWrapper;

class ContatoList extends Page
{
    private $datagrid;

    public function __construct()
    {
        parent::__construct();

        $this->datagrid = new DatagridWrapper( new Datagrid );

        $codigo = new DatagridColumn('id', 'Código', 'center', '10%');
        $nome = new DatagridColumn('nome', 'Nome', 'left', '20%');
        $email = new DatagridColumn('email', 'Email', 'left', '30%');
        $assunto = new DatagridColumn('assunto', 'Assunto', 'left', '30%');

        $this->datagrid->addColumn($codigo);
        $this->datagrid->addColumn($nome);
        $this->datagrid->addColumn($email);
        $this->datagrid->addColumn($assunto);

        $nome->setTransformer( function($value) {
            return strtoupper($value);
        });

        $this->datagrid->addAction('visualizar', new Action([$this, 'onVisualiza']), 'nome');

        parent::add($this->datagrid);
    }

    public function onVisualiza($param)
    {
        new Message('info', "Você clicou sobre o registro: {$param['nome']}");
    }

    public function onReload()
    {
        $this->datagrid->clear();

        $m1 = new stdClass;
        $m1->id = 1;
        $m1->nome = 'Maria';
        $m1->email = 'maria$ashdfiu.com';
        $m1->assunto = 'Dúvida 1';
        $this->datagrid->addItem($m1);

        $m2 = new stdClass;
        $m2->id = 2;
        $m2->nome = 'João';
        $m2->email = 'joao$ashdfiu.com';
        $m2->assunto = 'Dúvida 2';
        $this->datagrid->addItem($m2);
    }

    public function show()
    {
        $this->onReload();
        parent::show();   
    }

}