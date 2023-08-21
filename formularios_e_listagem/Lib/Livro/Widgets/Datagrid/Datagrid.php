<?php

namespace Livro\Widgets\Datagrid;

use Livro\Control\ActionInterface;

class Datagrid
{
    private $columns;
    private $itens;
    private $actions;

    public function __construct()
    {   
        $this->columns = [];
        $this->itens = [];
        $this->actions = [];
    }

    public function addColumn(DatagridColumn $object)
    {
        $this->columns[] = $object;
    }

    public function addAction($label, ActionInterface $action, $field, $image = null)
    {
        $this->actions[] = [
            'label' => $label,
            'action' => $action,
            'field' => $field,
            'image' => $image
        ];
    }

    public function addItem($object)
    {
        $this->itens[] = $object;
    }

    public function getColumns()
    {
        return $this->columns;
    }

    public function getActions()
    {
        return $this->actions;
    }

    public function getItens()
    {
        return $this->itens;
    }

    public function clear()
    {
        $this->itens = [];
    }
}