<?php

class Titulo
{
    private $data;

    public function __set($propriedade, $valor)
    {
        $this->data[$propriedade] = $valor;
    }

    public function __get($propriedade)
    {
        return $this->data[$propriedade];
    }

    public function __isset($propriedade)
    {
        return isset($this->data[$propriedade]);
    }

    public function __unset($propriedade)
    {
        unset($this->data[$propriedade]);
    }

}

$tit = new Titulo;

print "<pre>";

$tit->algo = 123;
$tit->nome = 'teste';

if (isset($tit->algo))
{
print "Tem valor<br>";
}

unset($tit->algo);


//echo $tit->algo . '<br>';
var_dump($tit);
