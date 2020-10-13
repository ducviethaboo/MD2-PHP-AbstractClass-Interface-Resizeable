<?php


class Circle extends Shape implements Resizeable
{
    public $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function resize($number)
    {
        $this->radius += ($this->radius * ($number / 100));
    }


}