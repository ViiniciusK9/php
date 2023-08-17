<?php
use Livro\Control\Page;

class TwigListControl extends Page
{
    public function __construct()
    {
        parent::__construct();

        $loader = new Twig_Loader_Filesystem('App/Resources');
        $twig = new Twig_Environment($loader);

        $template = $twig->loadTemplate('list.html');
        
        $replaces = [];
        $replaces['titulo'] = 'Lista de pessoas';
        $replaces['pessoas'] = [
            [ 'codigo' => 1,
              'nome' => 'Julio Cesar',
              'endereco' => 'Rua das pedras'],
            [ 'codigo' => 2,
              'nome' => 'Mario Cesar',
              'endereco' => 'Rua das pedras'],
            [ 'codigo' => 3,
              'nome' => 'Tulio Cesar',
              'endereco' => 'Rua das pedras']
        ];

        print $template->render( $replaces );

    }
}