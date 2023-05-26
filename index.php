<?php
abstract class Shape{
    protected $wigth;
    protected $height;

    public function __construct($wigth,$height){
        $this -> wigth = $wigth;
        $this -> height = $height;
    }

    abstract function draw();
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="d1">
    </div>
    <div class="d2">
    </div>
    <div class="d3">
    </div>
</body>
</html>
