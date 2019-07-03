<?php
require_once 'CarInterface.php';

abstract class Car implements CarInterface
{
    public $temp = 20;
    protected $speed = 20;
    private $kilometers = 1000;

    abstract public function move();

    public function autopilot()
    {
        $this->speed = 30;
        $this->move();
        $this->kilometers += $this->speed;
    }

    public function getCurrentSpeed()
    {
        return $this->speed;
    }
}