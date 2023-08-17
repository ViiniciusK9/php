<?php

use Livro\Control\Page;

class TwigWelcomeControl extends Page
{
    public function __construct()
    {
        parent::__construct();

        $loader = new Twig_Loader_Filesystem('App/Resources');
        $twig = new Twig_Environment($loader);

        $template = $twig->loadTemplate('welcome.html');

        $replaces = [];
        $replaces['nome'] = 'Joao da Silva';
        $replaces['rua'] = 'Rua das pedras';
        $replaces['cep'] = '89888834';
        $replaces['fone'] = '(88) 1234-1234';

        print $template->render($replaces);
    }

    public function onSaibaMais($param)
    {
        echo "Mais informações";
    }
}