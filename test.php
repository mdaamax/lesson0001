<?php

class user
{
    public $id = 0;
    public $login = 'test';
    public $password = 'pass';
    public $balance = 0;

    public function cryptPassword()
    {
        $this->password = $this->password . 'cript';
    }

    public function self_dump()
    {
        var_dump($this);
    }

    public function transferALLto(user $user)
    {
        $user->balance += $this->balance;
        $this->balance = 0;
    }
}

$ivan = new User();
$ivan->login = 'ivan';
$ivan->password = '1233';
$ivan->balance = 1000;
$petr = new User();
$petr->id = 2;
$petr->login = 'petr';
$petr->balance = 2000;
$petr->cryptPassword();
$petr->self_dump();
$ivan->self_dump();

$ivan->transferALLto($petr);
$ivan->self_dump();
$petr->self_dump();



//class phone {
//    public $id = 0;
//    public $number = 88005553535;
//    public $color = 'space';
//    public $model = 'iphone';
//    public function newColor(){
//        $this-> color = $this -> color.'Grey';
//        var_dump($this);
//    }
//    public function newModel(){
//        $this -> model = $this -> model.'MINI';
//    }
//}
//
//$iphone = new phone();
//$iphone -> id = 0;
//$iphone -> number = 3493241291111148;
//$iphone -> newModel();
//$iphone -> newColor() ;
//var_dump($iphone);


