<?php
require_once("vendor/autoload.php");
 
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 25));
$transport->setUsername('dbq.batista');
$transport->setPassword('1111');

$mailer = new Swift_Mailer($transport);

$message = new Swift_Message('Test Subject');
$message->setFrom('dbq.batista@gmail.com');
$message->setTo('danilobatistaqueiroz@gmail.com');
$message->setBody('This is a test mail.');

$result = $mailer->send($message);
?>