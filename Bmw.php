<?php
require_once 'Car.php';

class Bmw extends Car
{
    public $brand = 'BWM';

    public function move()
    {
        $this->temp += 5;
    }
}