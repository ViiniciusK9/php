<?php

class Software
{
    private $id;
    private $nome;

    // atributo estatico (self::nomeAtributo ou NomeClasse::nomeAtributo)
    private static $contador;

    public function __construct($nome)
    {
        self::$contador++;
        $this->id = self::$contador;
        $this->nome = $nome;
    }

    // metodo estatico (NomeClasse::nomeMetodo())
    public static function getContador()
    {
        return self::$contador;
    }

    public function getContador2()
    {
        return self::$contador;
    }
}

$s1 = new Software('Gimp');
$s2 = new Software('Gnumeric');

echo "<pre>";

print_r($s1);
print_r($s2);

var_dump(Software::getContador());
var_dump($s1->getContador2());
