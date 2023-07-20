<?php

class Funcionario
{
    public $nome;
    public $salario;
    public $departamento;

    public function __construct($nome, $salario, $departamento)
    {
        $this->nome = $nome;
        $this->salario = $salario;
        $this->departamento = $departamento;
    }

    function setSalario() {}
    function getSalario() {}
    function setNome() {}
    function getNome() {}
}

class Estagiario extends Funcionario
{
    public $bolsa;
}

echo "<pre>";
print_r(get_class_methods('Funcionario'));

$f1 = new Funcionario('Jose da Silva', 2000, 'Financeiro');

print_r(get_object_vars($f1));

$e1 = new Estagiario('Joao da Silva', 0, 'Adiministrativo');

print_r(get_class($f1));
echo '<br>';
print_r(get_class($e1));
echo '<br>';
print_r(get_parent_class($e1));
echo '<br>';
print_r(is_subclass_of($e1, 'Funcionario'));
echo '<br>';
print_r(is_subclass_of('Estagiario', 'Funcionario'));
echo '<br>';

if (method_exists($f1, 'setNome'))
{
    print 'f1 tem o metodo setNome() <br>';
}

if (method_exists($f1, 'setDepartamento'))
{
    print 'f1 tem o metodo setDepartamento() <br>';
}


/**** Negocio bem maluco ****/

function apresenta($nome)
{
    print "Olá {$nome}<br>";
}

apresenta("Pablo");
$metodo = 'apresenta';
call_user_func($metodo, 'Pablo');

class Pessoa
{
    public static function apresenta($nome)
    {
        print "Olá {$nome}<br>";
    }
}

Pessoa::apresenta('Pablo');

$metodo = 'apresenta';
$classe = 'Pessoa';
call_user_func([$classe, $metodo], 'Pablo');

$obj = new Pessoa;

call_user_func([$obj, $metodo], 'Pablo');
