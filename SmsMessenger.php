<?php
require_once 'messanger.php';

class SmsMessenger extends Messanger
{
    private $phone;

    public function __construct($name,$phone)
    {
        parent::__construct($name);
        $this ->phone = $phone;
    }

    public function send($text)
    {
        echo "{$this->name} отправил СМС на номер
        {$this-> phone} с текстом \"$text\"";
    }
}