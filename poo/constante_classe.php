<?php

class Pessoa
{
    private $nome;
    private $genero;
    const GENEROS = ['M' => 'Masculino', 'F' => 'Feminino'];

    public function __construct($nome, $genero)
    {
        $this->nome = $nome;
        $this->genero = $genero;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getNomeGenero()
    {
        return self::GENEROS[$this->genero];
    }

}

$p1 = new Pessoa('Maria da Silva', 'F');
$p2 = new Pessoa('João Marcos', 'M');

print "Nome {$p1->getNome()}, Genero {$p1->getNomeGenero()}<br>";
print "Nome {$p2->getNome()}, Genero {$p2->getNomeGenero()}<br>";

var_dump(Pessoa::GENEROS);
