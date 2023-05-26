<?php
require 'EmailMessenger.php';
require 'SmsMessenger.php';

$email = new EmailMessenger('ivan');
$sms = new SmsMessenger('petr','88005553535');
$email -> send ('123');
echo "<br>";
$sms -> send('123');


?>