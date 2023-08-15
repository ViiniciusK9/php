<?php

class Titulo
{
    public $codigo;
    public $dt_vencimento;
    public $valor;
    public $juros;
    public $multa;

    public function __call($metodo, $valores)
    {   
        //print "Você executou o método {$metodo}, com os valores " . implode (',', $valores) . "<br>" ;
        return call_user_func($metodo, get_object_vars($this));
    }

}


$tit = new Titulo;

$tit->codigo = 123123;
$tit->dt_vencimento = 123123;
$tit->valor = 123123;
$tit->juros = 123123;
$tit->multa = 123123;

print "<pre>";

var_dump($tit);

$tit->print_r(312, 3, 1, "abc");