<?php
require_once 'PHPMailer.php';
require_once 'classes/PHPMailerAdapter.php';

$mail = new PGPMailerAdapter;
$mail->setFrom('email@email.com', 'Vinicius');
$mail->addAddress('email@email.com', 'Pato Donald');
$mail->setSubject('TESTE');
$mail->setTextBody('Isso é um email de teste');
$mail->send();

