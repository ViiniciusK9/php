<?php

require_once './classes/Record.php';

class Produto extends Record
{
    const TABLENAME = 'produto';
    use ObjectConversionTrait;
}

// trait pode ficar em outro arquivo para ser utilizado em diversos locais
trait ObjectConversionTrait
{
    public function toXML()
    {
        $xml = new SimpleXMLElement('<' . get_class($this) . '/>');
        foreach ($this->data as $key => $value)
        {
            $xml->addChild($key, $value);
        }
        return $xml->asXML();
    }

    public function toJSON()
    {
        return json_encode($this->data);
    }
}

$p1 = new Produto;

$p1->nome = 'Chocolate';
$p1->preco = 10;
$p1->quantidade = 40;

print $p1->toJSON() . '<br>';
print $p1->toXML() . '<br>';