<?php
require_once 'messanger.php';
class EmailMessenger extends Messanger
{
    public function send($text){
        echo "{$this->name} отправил письмо с текстом :\"$text\"";
    }
}