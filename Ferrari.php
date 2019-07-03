<?php
require_once 'Car.php';

class Ferrari extends Car
{
    public $brand = 'Ferrari';

    public function move()
    {
        $this->speed += 30;
        $this->temp += 5;
    }
}