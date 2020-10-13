<?php


class Square extends Shape implements Resizeable
{
    public $width;
    public function __construct($name,$width)
    {
        parent::__construct($name);
        $this->width = $width;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function resize($number)
    {
        $this->width += ($this->width * ($number/100));
    }
}