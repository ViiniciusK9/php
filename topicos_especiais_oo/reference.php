<?php

class Titulo
{
    public $codigo;
    public $dt_vencimento;
    public $valor;
    public $juros;
    public $multa;
}


$tit = new Titulo;

$tit->codigo = 123123;
$tit->dt_vencimento = 123123;
$tit->valor = 123123;
$tit->juros = 123123;
$tit->multa = 123123;

$tit2 = $tit;

