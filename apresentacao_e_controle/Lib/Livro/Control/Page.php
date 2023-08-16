<?php

namespace Livro\Control;

class Page
{
    public function show()
    {
        if ($_GET) 
        {
            //$method = isset($_GET['method']) ? $_GET['method'] : null;
            $method = isset($_GET['method']) ? $_GET['method'] : 'listar';

            if (method_exists($this, $method))
            {
                call_user_func([$this, $method], $_REQUEST);
            }
            
        }
    }
}