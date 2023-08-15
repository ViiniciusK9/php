<?php

require_once 'classes/api/Criteria.php';

$c = new Criteria;

$c->add('idade', '<', 16);
$c->add('idade', '>', 60, 'or');
print $c->dump() . '<br>';


$c = new Criteria;

$c->add('idade', 'IN', array(23, 24, 25));
$c->add('idade', 'NOT IN', array(10));
print $c->dump() . '<br>';