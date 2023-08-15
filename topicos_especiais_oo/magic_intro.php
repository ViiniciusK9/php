<?php

class Titulo
{
    private $dt_vencimento;
    private $valor;

    public function __construct($dt_vencimento, $valor)
    {
        $this->dt_vencimento = $dt_vencimento;
        $this->valor = $valor;
        print "Método construtor... <br>";
    }



    public function setValor($valor)
    {

    }

    public function __set($propriedade, $conteudo)
    {
        if ($propriedade == 'valor') 
        {
            $this->$propriedade = $conteudo * 1.5;
        }
    }

    public function __get($propriedade)
    {
        if ($propriedade == 'valor') 
        {
            return $this->$propriedade;
        }
        print "Tentou acessar a propriedade {$propriedade}<br>";
    }

    public function __destruct()
    {
        print "Método destrutor... <br>";
    }

}


$tit = new Titulo('1999-10-10', 100);

print $tit->valor;
print $tit->valorr;

$tit->valor = 200;

print $tit->valor;


unset($tit); // destruir o objeto

