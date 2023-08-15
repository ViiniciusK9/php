<?php

require_once 'classes/Preferences.php';


echo '<pre>';
$p1 = Preferences::getInstance();
//var_dump($p1);
print "A linguagem é : {$p1->getData('language')}<br>";
$p1->setData('language', 'en');

$p2 = Preferences::getInstance();
//var_dump($p2);
print "A linguagem é : {$p2->getData('language')}<br>";
