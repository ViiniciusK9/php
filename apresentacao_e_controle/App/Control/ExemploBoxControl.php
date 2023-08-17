<?php

use Livro\Control\Page;
use Livro\Widgets\Container\Panel;
use Livro\Widgets\Container\HBox;

class ExemploBoxControl extends Page
{
    public function __construct()
    {
        parent::__construct();


        $panel1 = new Panel('Título painel 1');
        $panel1->style = 'margin: 10px';
        $panel1->add('ashdfuiohasdui');

        $panel2 = new Panel('Título painel 2');
        $panel2->style = 'margin: 10px';
        $panel2->add('ashdfuiohasdui');

        $box = new HBox();
        $box->add($panel1);
        $box->add($panel2);

        parent::add($box);

    }
}